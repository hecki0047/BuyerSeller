<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WholesaleProductCategoryModel extends Model
{
     protected $table = 'product_to_wholesale_category';
    protected $guarded = array('created_at', 'updated_at');
    
    public function bdtdc_limited_lime_offers()
    {
        return $this->hasOne('App\Models\LimitedTimeOffer','product_id');
    }
    public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\Categories', 'category_id','id');
    }
    public function pro_parent_cat()
    {
        return $this->belongsTo('App\Models\Categories', 'parent_id','id');
    }
