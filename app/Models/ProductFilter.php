<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    protected $table = 'product_filter';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcFilter(){
		return $this->belongsTo('App\Models\Filter', 'filter_id');
   }

   public function bdtdcProduct(){
	return $this->belongsTo('App\Models\Products','product_id');
}

}
