<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponHistory extends Model
{
     protected $table = 'coupon_history';
	protected $guarded = array('created_at', 'updated_at');

	

    public function bdtdcCoupon(){
    	return $this->belongsTo('App\Models\Coupon', 'coupon_id');
    }


    public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}
	public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
}
