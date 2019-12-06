<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsBalance extends Model
{
     protected $table = 'ms_balance';
	protected $guarded = array('created_at', 'updated_at');


public function bdtdcProduct(){
		return $this->belongsTo('App\Models\Products', 'product_id');
	}
public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}


}
