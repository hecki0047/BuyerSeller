<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCustomField extends Model
{
     protected $table = 'order_custom_field';
	protected $guarded = array('created_at', 'updated_at');



public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

	public function bdtdcCustomField(){
    	return $this->belongsTo('App\Models\CustomeField', 'custom_field_id');
    }
    public function bdtdcCustomFieldValue(){
		return $this->belongsTo('App\Models\CustomFieldValue', 'custom_field_value_id');

	}
}
