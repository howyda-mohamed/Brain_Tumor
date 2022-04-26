<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function show_setting()
    {
        $users=User::all()->where('id',Auth::user()->id);
        return view('dashboard.patient.setting',compact('users'));
    }
    public function update_setting(Request $request,$id)
    {
        $user=User::find($id);
        $user->email=$request->input('email');
        $user->address=$request->input('address');
        $user->birth_date=$request->input('birth_date');
        $user->description=$request->input('description');
        $user->update();
        return redirect()->back()->with('message',"Account updated sucessfully");
    }
}
