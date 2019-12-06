<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
     protected $table = 'tax_rate';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}

	 public function bdtdcGeoZone(){
    	return $this->belongsTo('App\Models\GeoZone', 'geo_zone_id');
    }
}
