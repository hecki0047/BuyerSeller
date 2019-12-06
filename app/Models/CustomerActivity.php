<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerActivity extends Model
{   
    protected $table = 'customer_activity';
    protected $fillable=['activity_id','customer_id','key','data','ip','date_added'];
    
	public function bdtdcCustomer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Products','id', 'data');
    }
    public function product_category()
    {
        return $this->hasOne('App\Models\ProductToCategory','product_id', 'data');
    }
    public function bdtdc_company()
    {
        return $this->hasMany('App\Models\Companies','id', 'data');
    }
}
