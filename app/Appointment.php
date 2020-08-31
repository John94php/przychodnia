<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
   protected $fillable = ['title','fname_patient','fname_doctor','date'];
   protected $table = 'appointments';
}
