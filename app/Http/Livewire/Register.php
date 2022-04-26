<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name , $email , $password , $password_confirmation ,$gender ,$birthDate ,$success , $role , $code , $check;
    public $step = 1;


    public function increaceStep()
    {
        $this->validate($this->rules[$this->step]);
        $this->step++;
    }
    public function decreaceStep()
    {
        $this->step--;
    }

    protected $rules = [
        1 => [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation'=>['required','same:password']
        ],
        2 => [
            'birthDate' =>['required','date','date_format:Y-m-d','after_or_equal:1920-01-01'] ,
            'gender'    =>['required'],
            'role'    =>['required'],
            'check'     =>['accepted']
        ],
    ];
    public function register()
    {
       $this->validate($this->rules[$this->step]);
        $rules = collect($this->rules)->collapse()->toArray();
         $this->validate($rules);
        if ($this->role == 2) {
            $this->code = null ;
        }else{
            $this->validate(
                     [
                       'code'=>'required|unique:users,code']);
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'gender'=>$this->gender ,
            'roles_id' =>$this->role,
            'code'  =>$this->code,
            'date_birth' => $this->birthDate,
            'password' => bcrypt($this->password),
        ]);

        $this->reset();
        $this->resetValidation();
        redirect('/login')->with('message', 'User created successfully! Please Log In');

    }
    public function render()
    {
        return view('livewire.register');
    }

    public $x = 'btn jsspan spanone  activee';
    public $y  = 'btn spantwo  jsspan';
    public function xx($c='y')
    {
        if ($c=='x'){
            $this->x = 'btn jsspan spanone  activee';
            $this->y = 'btn spantwo  jsspan';
            $this->role = 2;
        }else{
            $this->y= 'btn jsspan spanone  activee';
            $this->x = 'btn spantwo  jsspan';
            $this->role = 1;
        }
    }
}
