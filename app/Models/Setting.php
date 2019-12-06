<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $table = 'setting';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }

}
