<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliateTransaction extends Model
{
      protected $table = 'affiliate_transaction';
    protected $guarded = array('created_at', 'updated_at');

   
    public function bdtdcAffiliate(){
    	return $this->belongsTo('App\Models\Affiliate', 'affiliate_id');
    }
	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}
}
