<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponProduct extends Model
{
    protected $table = 'coupon_product';
	protected $guarded = array('created_at', 'updated_at');

	

    public function bdtdcCoupon(){
    	return $this->belongsTo('App\Models\Coupon', 'coupon_id');
    }

     public function bdtdcProduct(){
    	return $this->belongsTo('App\Models\Products', 'product_id');
    }
   
}
