<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionDescription extends Model
{
   protected $table = 'option_description';
protected $guarded = array('created_at', 'updated_at');


public function bdtdcOption(){
		return $this->belongsTo('App\Models\Option', 'option_id');

	}

public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
