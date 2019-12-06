<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOnline extends Model
{
     protected $table = 'customer_online';
	protected $guarded = array('created_at', 'updated_at');

  public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
}
