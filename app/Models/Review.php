<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }


    public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}


}
