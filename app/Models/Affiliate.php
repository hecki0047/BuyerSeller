<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
   protected $table = 'affiliate';
    protected $guarded = array('created_at', 'updated_at');

   
     public function bdtdcCountry(){
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }
    public function bdtdcZone(){
    	return $this->belongsTo('App\Models\Zone', 'zone_id');
    }
}
