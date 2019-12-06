<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeProduct extends Model
{
    protected $table = 'home_products';

    public function homeProduct(){
    	return $this->hasOne('App\Models\Products','id','product_id');
    }
    public function limitedTimeOffer(){
    	return $this->hasOne('App\Models\LimitedTimeOffer','product_id','product_id');
    }
    public function hotProduct(){
    	return $this->hasOne('App\Models\HomeProduct','product_id','product_id')->where('hot_product',1)->orderBy('sort','asc')->take(15);
    }
}
