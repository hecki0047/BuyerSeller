<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionValueDescription extends Model
{
    protected $table = 'option_value';
protected $guarded = array('created_at', 'updated_at');


public function bdtdcOptionValue(){
		return $this->belongsTo('App\Models\OptionValue', 'option_value_id');

	}
public function bdtdcOption(){
		return $this->belongsTo('App\Models\Option', 'option_id');

	}
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
