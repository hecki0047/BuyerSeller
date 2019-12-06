<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    protected $table = 'customer_transaction';
	protected $guarded = array('created_at', 'updated_at');

  public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}
}
