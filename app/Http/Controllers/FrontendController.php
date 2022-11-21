<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Department;
use App\Models\Medicament;
use App\Models\Post;
use App\Models\Prescription;
use App\Models\Time;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Africa/Casablanca');
        if (request('date')) {
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return view('welcome', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        $departments = Department::latest()->limit(10)->get();
        $medecins = User::latest()->limit(4)->where('role_id', 1)->get();
        $posts = Post::where('status', 1)->get();
        return view('home', compact('doctors', 'medecins', 'departments', 'posts',));
    }

    public function show($doctorId, $date)
    {
        $appointment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appointment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctor_id = $doctorId;

        return view('appointment', compact('times', 'date', 'user', 'doctor_id'));
    }

    public function findDoctorsBasedOnDate($date)
    {
        $doctors = Appointment::where('date', $date)->get();
        return $doctors;
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Africa/Casablanca');

        $request->validate(['time' => 'required']);
        $check = $this->checkBookingTimeInterval();
        if ($check) {
            return redirect()->back()->with('message', 'Vous avez déjà pris un rendez-vous. Veuillez patienter pour prendre un prochain rendez-vous !');
        }

        Booking::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => $request->doctorId,
            'time' => $request->time,
            'date' => $request->date,
            'status' => 0
        ]);

        Time::where('appointment_id', $request->appointmentId)
            ->where('time', $request->time)
            ->update(['status' => 1]);
        // send email notification
        $doctorName = User::where('id', $request->doctorId)->first();
        $mailData = [
            'name' => auth()->user()->name,
            'time' => $request->time,
            'date' => $request->date,
            'doctorName' => $doctorName->name

        ];
        try {
            // \Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));

        } catch (Exception $e) {
        }

        return redirect()->back()->with('message', 'Votre demande du rendez-vous a été pris !');
    }

    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id', 'desc')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', date('Y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $appointments = Booking::latest()->where('user_id', auth()->user()->id)->get();
        return view('booking.index', compact('appointments'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id', auth()->user()->id)->get();
        return view('my-prescription', compact('prescriptions'));
    }

    public function doctorToday(Request $request)
    {
        $doctors = Appointment::with('doctor')->whereDate('date', date('Y-m-d'))->get();
        return $doctors;
    }

    public function findDoctors(Request $request)
    {
        $doctors = Appointment::with('doctor')->whereDate('date', $request->date)->get();
        return $doctors;
    }

    public function medicamentRecommendations($medicament)
    {
        $data = [];

        $medicamentBasedOnTitle = Medicament::where('nom', 'LIKE', '%' . $medicament->nom . '%')
            ->where('id', '!=', $medicament->id)
            ->limit(6);
        array_push($data, $medicamentBasedOnTitle);

        $medicamentBasedOnStatus = Medicament::where('status', 'LIKE', '%' . $medicament->status . '%')
            ->where('id', '!=', $medicament->id)
            ->limit(6);
        array_push($data, $medicamentBasedOnStatus);

        $medicamentBasedOnPresentation = Medicament::where('presentation', 'LIKE', '%' . $medicament->presentation . '%')
            ->where('id', '!=', $medicament->id)
            ->limit(6);
        array_push($data, $medicamentBasedOnPresentation);

        $collection  = collect($data);
        $unique = $collection->unique("id");
        $medicamentRecommendations =  $unique->values()->first();
        return $medicamentRecommendations;
    }

    public function medecin()
    {
        return view('medecin.index');
    }

    public function allMedicaments(Request $request)
    {
        // Page Accueil - Search
        $search = $request->get('search');
        if ($search) {
            $medicaments = Medicament::where('nom', 'LIKE', '%' . $search . '%')
                ->orWhere('status', 'LIKE', '%' . $search . '%')
                ->paginate(20);

            return view('medicaments.allmedicaments', compact('medicaments'));
        }
        $keyword = $request->get('nom');
        $status = $request->get('status');
        $category = $request->get('categorie_id');
        if ($keyword || $status) {
            $medicaments = Medicament::where('nom', 'LIKE', '%' . $keyword . '%')
                ->orWhere('status', $status)
                ->paginate(20);
            return view('medicaments.allmedicaments', compact('medicaments'));
        } else {
            $medicaments = Medicament::latest()->paginate(20);
            return view('medicaments.allmedicaments', compact('medicaments'));
        }
    }
    public function searchMedicaments(Request $request)
    {
        $keyword = $request->get('keyword');
        $users = Medicament::where('nom', 'like', '%' . $keyword . '%')
            ->limit(5)->get();
        return response()->json($users);
    }
}