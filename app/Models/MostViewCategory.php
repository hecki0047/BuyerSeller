<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MostViewCategory extends Model
{
    protected $table = 'most_view_categorys';
	protected $guarded = array('created_at', 'updated_at');


public function mostViewCategory()
	{
		return $this->belongsTo('App\Models\ProductDescription','product_id','product_id');
	}
	public function cat_name()
	{
		return $this->hasOne('App\Models\Categories','id','category_id');
	}
	public function parent_cat()
	{
		return $this->hasOne('App\Models\Categories','id','parent_id');
	}
	public function most_product()
	{
		return $this->hasOne('App\Models\Products','id','product_id');
	}
    public function product_image()
    {
        return $this->hasOne('App\Models\ProductImage', 'product_id','product_id');
    }
     public function proimage()
    {
        return $this->belongsTo('App\Models\ProductImage', 'product_id','product_id');
    }
    
    public function proimages()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id','product_id');
    }

    public function product_image_new()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','product_id');
    }

    public function proimages_new(){

        return $this->hasMany('App\Models\ProductImageNew', 'product_id','product_id');
    }

    public function proimage_new(){

        return $this->belongsTo('App\Models\ProductImageNew', 'product_id','product_id');
    }


}
