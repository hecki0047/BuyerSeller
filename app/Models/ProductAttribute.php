<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
     protected $table = 'product_attribute';
	protected $guarded = array('created_at', 'updated_at');

	public function product(){

		return $this->belongsTo('App\Models\Products','product_id');
	}
	public function language(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
	public function attribute(){
    	return $this->hasOne('App\Models\Attribute', 'id','attribute_id');
    }
}
