<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToLayout extends Model
{
     protected $table = 'product_to_layout';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}


public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
     public function bdtdcLayout(){
    	return $this->belongsTo('App\Models\Layout', 'layout_id');
    }

}
