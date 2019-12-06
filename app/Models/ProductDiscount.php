<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $table = 'product_discount';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
}
