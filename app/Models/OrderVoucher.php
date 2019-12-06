<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderVoucher extends Model
{
      protected $table = 'order_voucher';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

public function bdtdcVoucher(){

	return $this->belongsTo('App\Models\Voucher','voucher_id');
}

public function bdtdcVoucherTheme(){

	return $this->belongsTo('App\Models\VoucherTheme','voucher_theme_id');
}
}
