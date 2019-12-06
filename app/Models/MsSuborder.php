<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsSuborder extends Model
{
     protected $table = 'ms_suborder';
protected $guarded = array('created_at', 'updated_at');

public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}
	public function bdtdcMsSeller(){
    	return $this->belongsTo('App\Models\MsSeller', 'seller_id');
    }
public function bdtdcOrderStatus(){
    	return $this->belongsTo('App\Models\OrderStatus', 'order_status_id');
    }

}
