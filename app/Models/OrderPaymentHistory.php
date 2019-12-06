<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPaymentHistory extends Model
{
    protected $table = 'order_payment_history';
	protected $fillable = ['order_id','pay_amount'];

	public function orders()
	{
		return $this->belongsTo('App\Models\Order','order_id','id');
	}
	public function order_invoice()
	{
		return $this->hasOne('App\Models\SupplierInvoice','order_id','order_id');
	}
	


}
