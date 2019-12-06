<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LimitedTimeOffer extends Model
{
     protected $table = 'limited_lime_offers';
    protected $guarded = array('created_at', 'updated_at');
    
    public function bdtdcProduct()
    {
        return $this->belongsTo('App\Models\Products','product_id');
    }
    public function product_name(){
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function bdtdcproductimage()
    {
        return $this->hasOne('App\Models\ProductImage','product_id','product_id');
    }
    public function bdtdcproductimages()
    {
        return $this->hasOne('App\Models\ProductImageNew','product_id','product_id');
    }
    public function wholesale_product_category()
    {
        return $this->belongsTo('App\Models\WholesaleProductCategoryModel','product_id','product_id');
    }
    public function bdtdcCategory(){
        return $this->hasOne('App\Models\Categories', 'id','sub_category');
    }
    public function bdtdc_parent_Category(){
        return $this->hasOne('App\Models\Categories', 'id','parent_category');
    }
    public function pro_parent_cat()
    {
        return $this->hasMany('App\Models\Categories', 'parent_id','parent_category');
    }
    public function pro_cat_pro(){
        return $this->hasMany('App\Models\LimitedTimeOffer','sub_category','sub_category');
    }
    public function pro_sub_cat(){
        return $this->hasMany('App\Models\LimitedTimeOffer','parent_category','parent_category');
    }

}
