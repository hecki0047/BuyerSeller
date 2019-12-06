<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeightClassDescription extends Model
{
    protected $table = 'weight_class_description';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcWeightClass(){

	return $this->belongsTo('App\Models\WeightClass','weight_class_id');
}
public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
