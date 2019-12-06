<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleProducts extends Model
{
   
    protected $table = 'sample_products';
    protected $fillable = ['id','request_id','product_name','product_details','product_image','quantity','unit_id'];

    public function unit()
    {
    	return $this->belongsTo('App\Models\ProductUnit','unit_id');
    }

}
