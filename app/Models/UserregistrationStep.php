<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserregistrationStep extends Model
{
   
    protected $table = 'user_registration_step';
    protected $fillable = ['user_id','step_id'];
}
