<?php

use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\MedicamentsController;
use App\Http\Controllers\PatientlistController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SiteSettingController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard ');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', DoctorController::class);
    Route::resource('facture', FactureController::class);
    Route::get('facture/print/{id}', [FactureController::class, 'print'])->name('facture.print');
    Route::get('/patients', [PatientlistController::class, 'index'])->name('patient');
    Route::get('/patients/all', [PatientlistController::class, 'allTimeAppointment'])->name('all.appointments');
    Route::get('/status/update/{id}', [PatientlistController::class, 'toggleStatus'])->name('update.status');
    Route::resource('department', DepartmentController::class);
    Route::resource('medicament', MedicamentsController::class);
    Route::resource('analyses', AnalyseController::class);

    // Admin Site Setting Routes :
    Route::get('/site', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');
    Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');
    Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting');
    Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');
});

Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', AppointmentController::class);
    Route::post('/appointment/check', [AppointmentController::class, 'check'])->name('appointment.check');
    Route::post('/appointment/update', [AppointmentController::class, 'updateTime'])->name('update');

    Route::get('patient-today', [PrescriptionController::class, 'index'])->name('patients.today');
    Route::post('/prescription', [PrescriptionController::class, 'store'])->name('prescription');

    Route::get('/prescription/{userId}/{date}', [PrescriptionController::class, 'show'])->name('prescription.show');
    Route::get('/prescribed-patients', [PrescriptionController::class, 'patientsFromPrescription'])->name('prescribed.patients');
});
