<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRelated extends Model
{
     protected $table = 'product_related';
	protected $guarded = array('created_at', 'updated_at');

	

   public function bdtdcProduct(){
	return $this->belongsTo('App\Models\Products','product_id');
}

}
