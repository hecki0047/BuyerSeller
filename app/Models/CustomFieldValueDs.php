<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomFieldValueDs extends Model
{
    protected $table = 'custom_field_value_ds';
	protected $guarded = array('created_at', 'updated_at');



	 public function bdtdcCustomFieldValue(){
			return $this->belongsTo('App\Models\CustomFieldValue', 'custom_field_value_id');

		}
	 public function bdtdcLanguage(){
			return $this->belongsTo('App\Models\Language', 'language_id');

		}
	    public function bdtdcCustomField(){
	    	return $this->belongsTo('App\Models\CustomeField', 'custom_field_id');
	    }
  
}
