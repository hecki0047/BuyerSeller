<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTotal extends Model
{
    protected $table = 'order_total';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}


}
