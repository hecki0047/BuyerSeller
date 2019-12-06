<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
   
    protected $table="temp_user";
    protected $fillable = ['email','rand_key'];
}
