<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function show_appointment()
    {
        $doctors=User::all()->where('roles_id', '1');
        $doc_dels=User::all()->where('id','2');
        $details=DB::table('doctor_details')->where('doctor_id','2')->paginate('2');
        return view('dashboard.patient.doctor',compact('doctors','doc_dels','details'));
    }
    public function book_appointment()
    {
        $details=Doctor_detail::all()->where('doctor_id','2');
        return view('dashboard.patient.book_app',compact('details'));
    }
    public function insert_appointment(Request $request)
    {
        $request->validate([
            'date' => ['required', 'date'],
            'time'=>['required' ,'time'],
            'location' => ['required' ,'string' ]
        ]);
            $appointment=new Appointment();
            $appointment->patient_id= Auth::user()->id;
            $appointment->doctor_id='2';
            $appointment->save();
            return redirect()->back()->with('message','Your Mri Uplouded Successfully');
    }
}
