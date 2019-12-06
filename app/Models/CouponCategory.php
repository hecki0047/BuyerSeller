<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponCategory extends Model
{
     protected $table = 'coupon_category';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\Categories', 'category_id');
    }

    public function bdtdcCoupon(){
    	return $this->belongsTo('App\Models\Coupon', 'coupon_id');
    }
}
