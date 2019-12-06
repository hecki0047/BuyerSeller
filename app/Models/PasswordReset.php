<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
   protected $table = 'password_resets';
    protected $guarded = array('created_at');

   
     public function user(){
    	return $this->hasOne('App\Models\Users', 'email','email');
    }
}
