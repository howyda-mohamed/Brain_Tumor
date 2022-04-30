<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $doctors=User::all()->where('roles_id', '1');
        return view('site.index',compact('doctors'));
    }
    public function register()
    {
        return view('auth.registeration');
    }
    public function redirects()
    {
        $role=Auth::user()->roles_id;
        if($role == '1')
        {
            return view('dashboard.doctor.index');
        }
        elseif($role == '2')
        {
            $appointment=Appointment::all();
            $indexs=DB::table('appointments')
            ->join('users', 'users.id', '=', 'appointments.doctor_id')
            ->join('doctor_details','doctor_details.id', '=', 'appointments.details_id')
            ->where('appointments.patient_id',Auth::user()->id)
            ->get();
            return view('dashboard.patient.index',compact('indexs','appointment'));
        }
        elseif($role == '3')
        {
            return view('dashboard.admin.index');
        }
    }
    
}
