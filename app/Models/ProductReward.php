<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReward extends Model
{
    protected $table = 'product_reward';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}
public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
}
