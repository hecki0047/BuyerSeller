<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
     protected $table = 'zone';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCountry(){
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }


}
