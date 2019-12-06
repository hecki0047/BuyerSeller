<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerIp extends Model
{
     protected $table = 'customer_ip';
	protected $guarded = array('created_at', 'updated_at');

  public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
}
