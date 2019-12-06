<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsOrderComment extends Model
{
   
     protected $table = 'ms_order_comment';
	protected $guarded = array('created_at', 'updated_at');

   
public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}
}
