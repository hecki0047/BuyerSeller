<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderRecurring extends Model
{
   protected $table = 'order_recurring';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}

public function bdtdcRecurring(){
	return $this->belongsTo('App\Models\Recurring','recurring_id');
}


}
