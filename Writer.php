<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
        protected $fillable = [
        'name', 'title', 'message',
    ];
}
