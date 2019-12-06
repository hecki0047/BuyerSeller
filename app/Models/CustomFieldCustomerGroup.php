<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomFieldCustomerGroup extends Model
{
     protected $table = 'custom_field_customer_group';
	protected $guarded = array('created_at', 'updated_at');

  

    public function bdtdcCustomField(){
    	return $this->belongsTo('App\Models\CustomeField', 'custom_field_id');
    }

    public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
}
