<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomFieldValue extends Model
{
    protected $table = 'custom_field_value';
	protected $guarded = array('created_at', 'updated_at');

  

    public function bdtdcCustomField(){
    	return $this->belongsTo('App\Models\CustomeField', 'custom_field_id');
    }
}
