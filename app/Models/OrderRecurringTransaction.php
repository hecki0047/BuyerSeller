<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderRecurringTransaction extends Model
{
     protected $table = 'order_recurring_transaction';
	protected $guarded = array('created_at', 'updated_at');

	

public function bdtdcOrderRecurring(){
	return $this->belongsTo('App\Models\OrderRecurring','order_recurring_id');
}
}
