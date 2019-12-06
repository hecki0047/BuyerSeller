<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $guarded = array('created_at', 'updated_at');

    public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function bdtdcCountry(){
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }
    public function bdtdcZone(){
    	return $this->belongsTo('App\Models\Zone', 'zone_id');
    }
}
