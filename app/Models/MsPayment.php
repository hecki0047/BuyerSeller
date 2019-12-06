<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsPayment extends Model
{
    protected $table = 'ms_payment';
	protected $guarded = array('created_at', 'updated_at');

   
public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}

public function bdtdcMsSeller(){
    	return $this->belongsTo('App\Models\MsSeller', 'seller_id');
    }
}
