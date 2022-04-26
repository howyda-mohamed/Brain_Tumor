<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xray extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'patient_id',
        'doctor_id',
        'type_approved',
        'result_messege',
    ];

}
