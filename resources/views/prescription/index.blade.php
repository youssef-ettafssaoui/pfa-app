@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-header">

                        Rendez-vous ({{ $bookings->count() }})
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Téléphone</th>

                                    <th scope="col">Time</th>
                                    <th scope="col">Médecin</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ordonnance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;">
                                        </td>
                                        <td>
                                            {{ $booking->date }}
                                        </td>
                                        <td class="text-primary font-weight-bold">{{ $booking->user->name }}</td>
                                        <td>{{ $booking->user->phone_number }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td class="text-primary font-weight-bold">Dr. {{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 1)
                                                <p class="badge badge-success">Vérifié
                                                </p>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->

                                            @if (!App\Models\Prescription::where('date', date('Y-m-d'))->where('doctor_id', auth()->user()->id)->where('user_id', $booking->user->id)->exists())
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $booking->user_id }}">
                                                    Rédiger Ordonnance
                                                </button>
                                                @include('prescription.form')
                                            @else
                                                <a href="{{ route('prescription.show', [$booking->user_id, $booking->date]) }}"
                                                    class="btn btn-warning">Voir Ordonnance</a>
                                            @endif


                                        </td>
                                    </tr>
                                @empty
                                    <td class="text-danger">Vous n'avez aucun rendez-vous aujourd'hui !</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
