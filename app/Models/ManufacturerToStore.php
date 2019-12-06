<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturerToStore extends Model
{
   
     protected $table = 'manufacturer_to_store';
	protected $guarded = array('created_at', 'updated_at');


public function bdtdcManufacturer(){
    	return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_id');
    }
	public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
}
