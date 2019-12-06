<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
     protected $table = 'product_description';
	protected $guarded = array('created_at', 'updated_at');


	public function bdtdcProduct()
	{
		return $this->belongsTo('App\Models\Products','product_id');
	}

	public function bdtdcLanguage()
	{
		return $this->belongsTo('App\Models\Language', 'language_id');
	}

	public function supplierrr()
	{
		return $this->hasOne('App\Models\SupplierProduct','product_id','product_id');
	}

	public function bdtdcProductdescription()
	{
		return $this->belongsTo('App\Models\Products','product_id');
	}

	public function product_name_category()
	{
		return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
	}

	public function product_category()
	{
		return $this->belongsTo('App\Models\ProductToCategory','product_id','product_id');
	}

	public function product_image()
    {
        return $this->hasOne('App\Models\ProductImage', 'product_id','product_id');
    }
    
    public function proimages()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id','product_id');
    }

    public function product_image_new()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','product_id');
    }
    
    public function proimages_new()
    {
        return $this->hasMany('App\Models\ProductImageNew', 'product_id','product_id');
    }

    public function scopeSearchByKeyword($query, $keyword)
	    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("name", "LIKE","$keyword%");
            });
        }
        return $query;
	 	}

	
}
