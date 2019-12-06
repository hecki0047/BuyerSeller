<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRecurring extends Model
{
    protected $table = 'product_recurring';
	protected $guarded = array('created_at', 'updated_at');

	

   public function bdtdcProduct(){
	return $this->belongsTo('App\Models\Products','product_id');
}

public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
    public function bdtdcRecurring(){
	return $this->belongsTo('App\Models\Recurring','recurring_id');
}


}
