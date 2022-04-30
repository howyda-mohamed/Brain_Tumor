<?php

namespace App\Http\Livewire;

use App\Models\Doctor_detail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Appointment;

class PatientAppointment extends Component
{
   public $pageNum = 1;
   public $name  ;
   public $address ;
   public $description ;
   public $profile_photo_path;
   public $Doctor_id ;
   public $iid ;
   public $date;
   public $time;
   public $clinicId;

   //

    public function mount()
    {
        $doctor =  User::where('roles_id','1')->first();
        $this->name = $doctor->name;
        $this->address = $doctor->address;
        $this->description = $doctor->description;
        $this->image = $doctor->profile_photo_path;
        $this->Doctor_id = $doctor->id;
    }

    public function changeBar($id)
    {
       $doctor = User::find($id);

        $this->name = $doctor->name;
        $this->address = $doctor->address;
        $this->description = $doctor->description;
        $this->image = $doctor->image;
        $this->Doctor_id = $doctor->id;
    }

    public function bookBar()
    {

        $this->pageNum +=1;
        $this->iid =$this->Doctor_id;

    }



    public function bookAppointment()
    {
        Appointment::create([
           'patient_id'=>Auth::id(),
            'doctor_id'=>$this->iid,
            'details_id'=> $this->clinicId
       ]);
      // session()->flash('message', 'appointment created successfully ..');
       $this->pageNum +=1;

    }
    public function UpdateAppointment()
    {
       

    }
    public function updatedTime()
    {
        $this->clinicId = Doctor_detail::select('id')->where('date',$this->date)->where('doctor_id',$this->iid)->where('time',$this->time)->first()->id;
    }
    public function render()
    {
        return view('livewire.patient-appointment',[
            'doctors' => User::where('roles_id','1')->get(),
            'details'=> Doctor_detail::where('doctor_id',$this->iid)->get()->unique('date'),
            'times'=> Doctor_detail::where('date',$this->date)->where('doctor_id',$this->iid)->get(),
             'clinicAdress'=> Doctor_detail::select('location')->where('date',$this->date)->where('doctor_id',$this->iid)->where('time',$this->time)->first(),
          'appointments'=>Appointment::select('details_id')->where('doctor_id',$this->iid)->get()
        ]);
    }
}



