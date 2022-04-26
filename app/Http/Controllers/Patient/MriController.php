<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Xray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Print_;

class MriController extends Controller
{
    public function show_mri()
    {
        $mri=DB::table('xrays')->count();
        $mriss=Xray::all()->where('patient_id',Auth::user()->id);
        return view('dashboard.patient.mri',compact('mri','mriss'));
    }
    public function insert_mri(Request $request)
    {

        $request->validate([
            'code' => ['required', 'string', 'min:4', 'max:8'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $doctor=User::all()->where('code',$request->code)->first();
        if($doctor)
        {
            $mris=new Xray();
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $file_name=time().'.'.$ext;
                $file->move('assets/uploads/mris',$file_name);
                $mris->image=$file_name;
            }
            $mris->patient_id= Auth::user()->id;
            $mris->doctor_id=$doctor->id;
            $mris->save();
            return redirect()->back()->with('message','Your Mri Uplouded Successfully');
        }
        else
        {
            return redirect()->back()->with('message','Your Code Is Not Found Please Enter Valid Code');
        }

    }
}
