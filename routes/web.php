<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Patient\Appointment;
use App\Http\Controllers\Patient\AppointmentController;
use App\Http\Controllers\Patient\MriController;
use App\Http\Controllers\Patient\PatientController;
use App\Http\Controllers\Patient\SettingController;
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



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/redirects',[HomeController::class,'redirects']);
    //patient routing
    Route::group(['prefix'=>'patient'],function()
    {
        Route::get('/home',[PatientController::class,'index'])->name('patient_home');
        Route::get('/form_app',[AppointmentController::class,'book_appointment'])->name('book');
        Route::get('/center',[PatientController::class,'center'])->name('center');
        Route::get('/map/{id}',[PatientController::class,'map'])->name('map');
        Route::get('/artical',[PatientController::class,'artical'])->name('artical');
        Route::get('/foundation',[PatientController::class,'foundation'])->name('foundation');
        Route::get('/mri',[MriController::class,'show_mri'])->name('show_mri');
        Route::post('/insert_mri',[MriController::class,'insert_mri'])->name('insert_mri');
        Route::get('/chat',[PatientController::class,'chat'])->name('chat');
        Route::get('/show_setting',[SettingController::class,'show_setting'])->name('show_setting');
        Route::put('/update_setting/{id}',[SettingController::class,'update_setting']);
        Route::get('/mri_request',function(){
            return view('dashboard.patient.mri_request');
        })->name('mri_request');
    });

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
