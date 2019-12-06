<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
     protected $table = 'order_product';
	protected $guarded = array('created_at', 'updated_at');



public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','order_product_id');
}

public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}


}
