<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
     protected $fillable = [
        'name', 'emaill', 'mobile','date','category','message',
    ];
}
