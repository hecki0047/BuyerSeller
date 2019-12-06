<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomFieldDescription extends Model
{
     protected $table = 'custom_field_description';
	protected $guarded = array('created_at', 'updated_at');

  

    public function bdtdcCustomField(){
    	return $this->belongsTo('App\Models\CustomeField', 'custom_field_id');
    }

    public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
