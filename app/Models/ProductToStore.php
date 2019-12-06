<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToStore extends Model
{
    protected $table = 'product_to_store';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}


public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
}
