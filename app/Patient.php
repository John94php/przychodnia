<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = ['id','fname','PESEL','tel','email','zipcode','city','street','house','flat'];
    protected $table = "patients";
}
