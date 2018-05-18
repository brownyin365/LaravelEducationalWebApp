<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{   
    protected $fillable = [

        'lastname', 'major', 'dob', 'applieduni',
        
        ];


        protected $table = 'users';
}



