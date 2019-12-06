<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Return extends Model
{
    protected $table = 'return';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}
public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Product','product_id');
}

public function bdtdcReturnReason(){
	return $this->belongsTo('App\Models\ReturnReason','return_reason_id')
}
public function bdtdcReturnAction(){
	return $this->belongsTo('App\Models\ReturnAction','return_action_id')
}
public function bdtdcReturnStatus(){
	return $this->belongsTo('App\Models\ReturnStatus','return_status_id')
}


}
