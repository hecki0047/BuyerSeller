<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LengthClassDescription extends Model
{
     protected $table = 'length_class_description';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcLengthClass(){
		return $this->belongsTo('App\Models\LengthClass', 'length_class_id');

	}
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
