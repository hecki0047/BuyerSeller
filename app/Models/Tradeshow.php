<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tradeshow extends Model
{
    protected  $table = 'tradeshows';
    protected  $fillable = ['category_id','country_id','location','duration','venue','date','images'];

    public function description()
    {
    	return $this->hasOne('App\Models\TradeshowDescription', 'tradeshow_id');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id' , 'id');
    }
    public function trade_country(){
        return $this->hasOne('App\Models\Country', 'id','country_id');
    }
}
