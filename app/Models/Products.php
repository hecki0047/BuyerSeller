<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
	protected $guarded = array('created_at', 'updated_at');


	  public  function scopeLike($query, $field, $key)
    {
        return $query->where($field, 'LIKE', "%$key%");
    }
    
    public function limitedtimeoffer()
    {
        return $this->hasOne('App\Models\LimitedTimeOffer','product_id');
    }
    public function manufacturer()
    {
        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_id');
    }
	public function supplier_product_groups()
	{
    	return $this->belongsTo('App\Models\SupplierProductGroups', 'product_groups', 'id');
    }
    public function product_name()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id');
    }

    public function supplierInquery()
    {
        return $this->hasMany('App\Models\SupplierInquery','id','product_id');
    }

    public function logistic_info()
    {
        return $this->hasOne('App\Models\LogisticInfo','product_id');
    }

    public function bdtdcStockStatus()
    {
    	return $this->belongsTo('App\Models\StockStatus', 'stock_status_id');
    }

    public function taxClass(){
    	return $this->belongsTo('App\Models\TaxClass', 'tax_class_id');
    }

    public function weightClass(){
        	return $this->belongsTo('App\Model\BdtdcWeightClass', 'weight_class_id');
        }

    public function lengthClass(){
        	return $this->belongsTo('App\Models\LengthClass', 'length_class_id');
        }

    public function supplier_product()
    {
        return $this->hasOne('App\Models\SupplierProduct','product_id');
    }

    public function ProductUnit()
    {
        return $this->belongsTo('App\Models\ProductUnit', 'unit_type_id');
    }

    public function product_unit()
    {
        return $this->hasOne('App\Models\ProductUnit', 'id','unit_type_id');
    }

    public function product_prices()
    {
        return $this->hasOne('App\Models\ProductPrice', 'product_id','id');
    }
    public function productToCategory(){
        return $this->hasOne('App\Models\ProductToCategory', 'product_id','id');
    }
     public function productCategory()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
     
    public function category()
    {
        return $this->hasOne('App\Models\ProductToCategory', 'product_id');
    }
    public function product_image()
    {
        return $this->hasOne('App\Models\ProductImage', 'product_id','id');
    }
    
    public function proimages()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id','id');
    }
    public function product_country()
    {
        return $this->hasOne('App\Models\Country', 'id','location');
    }

    public function product_image_new()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','id');
    }
    
    public function proimages_new()
    {
        return $this->hasMany('App\Models\ProductImageNew', 'product_id','id');
    }

    public function product_attribute()
    {
        return $this->hasMany('App\Models\ProductAttribute', 'product_id','id');
    }
    public function customer_activity()
    {
        return $this->hasMany('App\Models\CustomerActivity', 'data','id');
    }
}
