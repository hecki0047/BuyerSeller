<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderOption extends Model
{
    protected $table = 'order_option';
	protected $guarded = array('created_at', 'updated_at');



public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','order_product_id');
}
public function bdtdcProductOption(){
		return $this->belongsTo('App\Models\ProductOption', 'product_option_id');

	}
	public function bdtdcProductOptionValue(){
		return $this->belongsTo('App\Models\ProductOptionValue', 'product_option_value_id');

	}
}
