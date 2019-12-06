<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsSuborderHistory extends Model
{
    protected $table = 'ms_suborder';
protected $guarded = array('created_at', 'updated_at');

public function bdtdcMsSuborder(){
		return $this->belongsTo('App\Models\MsSuborder', 'suborder_id');
	}
	
public function bdtdcOrderStatus(){
    	return $this->belongsTo('App\Models\OrderStatus', 'order_status_id');
    }
}
