<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
     public function notice_details(){
    	return $this->hasMany('App\Models\NoticeDetails');
    }
}
