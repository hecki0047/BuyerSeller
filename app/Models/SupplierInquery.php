<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierInquery extends Model
{
    protected $table = "supllier_inqueries";
    protected $fillable = ['id','product_id','messages','quantity','unit_price','sender','product_owner_id','status','total','unit_id','active'];

    public function products()
    {
    	return $this->belongsTo('App\Models\Products','product_id','id');
    }

    public function inq_products_description()
    {
    	return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }

    public function inq_message()
    {
        return $this->hasMany('App\Models\InqueryMessage','inquery_id','id');
    }

    public function inq_products_image()
    {
    	return $this->hasOne('App\Models\ProductImage','product_id','product_id');
    }

    public function inq_products_image_all()
    {
        return $this->hasMany('App\Models\ProductImage','product_id','product_id');
    }

    public function p_price()
    {
        return $this->hasOne('App\Models\ProductPrice','product_id','product_id');
    }

    public function inq_products_images()
    {
        return $this->hasOne('App\Models\ProductImageNew','product_id','product_id');
    }

    public function inq_products_images_all()
    {
        return $this->hasMany('App\Models\ProductImageNew','product_id','product_id');
    }

    public function inq_unit_id()
    {
    	return $this->belongsTo('App\Models\ProductUnit','unit_id','id');
    }

    public function bdtdc_product_attribute()
    {
        return $this->hasMany('App\Models\ProductAttribute','product_id','product_id');
    }
    public function inq_products_category()
    {
    	return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
    }
    public function sender_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','sender');
    }
    public function sender_customers_info(){
        return $this->hasOne('App\Models\Customer','user_id','sender');
    }
    public function product_owner_company()
    {
        return $this->hasOne('App\Model\Companies','user_id','product_owner_id');
    }
    public function product_owner_supplier()
    {
        return $this->hasOne('App\Model\Supplier','user_id','product_owner_id');
    }
    public function product_owner_customers_info(){
        return $this->hasOne('App\Model\Customer','user_id','product_owner_id');
    }
    public function product_owner_user()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function inq_sender_user()
    {
        return $this->hasOne('App\Models\Users','id','sender');
    }
    public function inq_docs()
    {
        return $this->hasMany('App\Models\InqueryDocs','inquery_id','id');
    }
    public function inq_docs_one()
    {
        return $this->hasOne('App\Models\InqueryDocs','inquery_id','id');
    }
    public function productname(){
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function BdtdcSupplierQueryProductUnit(){
        return $this->hasOne('App\Models\ProductUnit','id','unit_id');
    }
    public function product_supplier()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function sender_name()
    {
        return $this->hasOne('App\Models\Supplier','user_id','sender');
    }
    public function home_inquiry()
    {
        return $this->hasOne('App\Models\HomeInquires','inquiry_id','id');
    }
}
