<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticeDetails extends Model
{
    public function get_user_info(){
    	return $this->belongsTo('App\Models\Users', 'user_id');
    }
    public function get_user_role_info(){
    	return $this->belongsTo('App\Models\Role', 'user_role_id');
    }
}
