<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherHistory extends Model
{
    protected $table = 'voucher_history';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcOrder(){
		return $this->belongsTo('App\Models\Order', 'order_id');
	}

public function bdtdcVoucher(){

	return $this->belongsTo('App\Models\Voucher','voucher_id');
}

}
