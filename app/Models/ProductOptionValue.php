<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    protected $table = 'product_option_value';
	protected $guarded = array('created_at', 'updated_at');

	

   public function bdtdcProduct(){
	return $this->belongsTo('App\Models\Products','product_id');
}
public function bdtdcOption(){
		return $this->belongsTo('App\Models\Option', 'option_id');

	}
	public function bdtdcOptionValue(){
	return $this->belongsTO('App\Models\OptionValue','option_value_id');

}
public function bdtdcProductOption(){
	return $this->belongsTO('App\Models\ProductOption','product_option_id');

}



}
