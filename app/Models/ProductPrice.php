<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'product_prices';
	protected $guarded = array('created_at', 'updated_at');
	
	public function products()
	{
	      return $this->belongsTo('App\Models\Products','product_id');
	}
}
