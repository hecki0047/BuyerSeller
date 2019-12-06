<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
     protected $table = 'product_image';
	protected $guarded = array('created_at', 'updated_at');

   public function bdtdcProduct()
   {
		return $this->belongsTo('App\Models\Products','product_id','id');
   }
   public function bdtdcProductToCategory()
   {
		return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
   }
}
