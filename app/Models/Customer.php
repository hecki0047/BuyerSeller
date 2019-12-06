<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
	protected $guarded = array('created_at', 'updated_at');

	   
	public function bdtdcCustomerGroup(){
		return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
	}
	public function company()
	{
		return $this->hasOne('App\Models\Company','user_id','user_id');
	}

	public function users()
	{
		return $this->belongsTo('App\Models\Users','user_id','user_id');
	}

	public function country()
	{
		return $this->belongsTo('App\Models\Country','country_id','country_id');
	}
 	public function suppliers()
    {
    	return $this->belongsTo('App\Models\Supplier', 'user_id','user_id');
    }
}
