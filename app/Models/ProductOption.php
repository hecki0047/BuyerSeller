<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    
     protected $table = 'product_option';
	protected $guarded = array('created_at', 'updated_at');

	

   public function bdtdcProduct(){
	return $this->belongsTo('App\Models\Products','product_id');
}
public function bdtdcOption(){
		return $this->belongsTo('App\Models\Option', 'option_id');

	}
	
}
