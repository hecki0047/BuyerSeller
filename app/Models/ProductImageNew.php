<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImageNew extends Model
{
    protected $table = 'product_images';
	  protected $guarded = array('created_at', 'updated_at');

   
   public function bdtdcProduct()
   {
		return $this->belongsTo('App\Models\Products','product_id','id');
   }
   public function ProductToCategory()
   {
		return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
   }
}
