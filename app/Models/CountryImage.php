<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryImage extends Model
{
    protected $table = 'country_images';
    protected $guarded = array('created_at', 'updated_at');

    public function country_category()
    {
        return $this->belongsTo('App\Models\ProductToCategory', 'country_id');
    }
    public function country_country(){
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }
    
}
