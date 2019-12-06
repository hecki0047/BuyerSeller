<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZoneToGeoZone extends Model
{
    protected $table = 'zone_to_geo_zone';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCountry(){
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }
 public function bdtdcZone(){
    	return $this->belongsTo('App\Models\Zone', 'zone_id');
    }

     public function bdtdcGeoZone(){
    	return $this->belongsTo('App\Models\GeoZone', 'geo_zone_id');
    }


}
