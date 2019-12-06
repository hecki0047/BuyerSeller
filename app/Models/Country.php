<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country_list';

    public function Product()
    {
      return $this->belongsTo('App\Models\Products', 'product_id');
    }
    public function country_for_image()
    {
    	return $this->hasMany('App\Models\CountryImage', 'country_id','id');
    }
    public function country_image_one()
    {
    	return $this->hasOne('App\Models\CountryImage', 'country_id','id');
    }
    public function contry_products()
    {
     	return $this->hasMany('App\Models\ProductToCategory', 'country_id','id');
    }
    public function country_region()
    {
     	return $this->hasMany('App\Models\Country', 'region_id','id');
    }
}
