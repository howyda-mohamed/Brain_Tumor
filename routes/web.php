<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Patient\MriController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Livewire\Appointment as LivewireAppointment;
use Illuminate\Support\Facades\Route;

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
// home Routing
Route::get('/',[HomeController::class,'index'])->name('home');
// register Routing
Route::get('/register',[HomeController::class,'register'])->name('reg');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
        Route::get('/redirects',[HomeController::class,'redirects']);
        Route::group(['middleware' => 'role:patient', 'prefix' => 'patient', 'as' => 'patient.'], function() {
            //patient home page
            Route::get('/home',[PatientController::class,'index'])->name('patient_home');
            //Doctors
            Route::get('/doctors',[PatientController::class,'doctor'])->name('doctors');
            //Appointment
            Route::get('/appointment',[PatientController::class,'book_appointment'])->name('book');
            Route::get('/delete_app/{id}',[PatientController::class,'delete_appointment']);
            //X-ray_center
            Route::get('/center',[PatientController::class,'center'])->name('center');
            Route::get('/map/{id}',[PatientController::class,'map'])->name('map');
            //Articles
            Route::get('/artical',[PatientController::class,'artical'])->name('artical');
            //Foundation
            Route::get('/foundation',[PatientController::class,'foundation'])->name('foundation');
            //MRi Images
            Route::get('/mri',[MriController::class,'show_mri'])->name('show_mri');
            Route::post('/insert_mri',[MriController::class,'insert_mri'])->name('insert_mri');
            //Show chat
            Route::get('/chat',[PatientController::class,'chat'])->name('chat');
        });

        Route::group(['middleware' => 'role:doctor', 'prefix' => 'doctor', 'as' => 'doctor.'], function() {
           Route::get('/index',[DoctorController::class,'index'])->name('doctor.index');
        });

        Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
            Route::get('/index',[AdminController::class,'index'])->name('admin.index');
        });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


