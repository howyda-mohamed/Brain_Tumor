<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Artical;
use App\Models\Center;
use App\Models\Foundation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        $appointment=Appointment::all();
        $indexs=DB::table('appointments')
        ->join('users', 'users.id', '=', 'appointments.doctor_id')
        ->join('doctor_details','doctor_details.id', '=', 'appointments.details_id')
        ->where('appointments.patient_id',Auth::user()->id)
        ->get();
        return view('dashboard.patient.index',compact('indexs','appointment'));
    }
    public function delete_appointment($id)
    {
        $appointments=Appointment::find($id);
        $appointments->delete();
        return redirect()->back()->with('message',"Your APPointment Deleted Sucessfully");
    }
    public function foundation(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search != "")
        {
            $foundations=Foundation::where('title','LIKE','%'.$search.'%')->get();
        }else
        {
            $foundations=Foundation::all();
        }
        return view('dashboard.patient.foundation',compact('foundations','search'));
    }
    public function artical()
    {
        $articals=Artical::all();
        return view('dashboard.patient.artical',compact('articals'));
    }
    public function center(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search != "")
        {
            $centers=Center::where('title','LIKE','%'.$search.'%')->get();
        }else
        {
            $centers=Center::all();
        }
        return view('dashboard.patient.x-ray_center',compact('centers','search'));
    }
    public function map($id)
    {
        $centers=Center::find($id);
        return view('dashboard.patient.map',compact('centers'));
    }
    public function chat()
    {
        return view('dashboard.patient.chat');
    }

}
