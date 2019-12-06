<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToWholesaleCategory extends Model
{
      protected $table = 'product_to_wholesale_category';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcProduct(){

       return $this->belongsTo('App\Models\Products','product_id','id');
    }
    public function bdtdcCategory(){
        return $this->belongsTo('App\Models\Categories', 'category_id','id');
    }
    public function pro_images()
    {
        return $this->hasOne('App\Models\ProductImage', 'product_id','product_id');
    }
    public function pro_images_new()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','product_id');
    }
    public function inquery()
    {
        return $this->hasMany('App\Models\SupplierQuery','product_id','product_id');
    }
    public function category_product_name()
    {
        return $this->hasOne('App\Model\ProductDescription','product_id','product_id');
    }
    public function category_product_id()
    {
        return $this->hasOne('App\Models\Products','id','product_id');
    }
     public function supp_pro_company()
    {
        return $this->belongsTo('App\Models\Companies','company_id','id');
    }
    public function pro_parent_cat()
    {
        return $this->belongsTo('App\Models\Categories', 'parent_id','id');
    }
    public function cat_country(){

        return $this->belongsTo('App\Model\Country', 'country_id','id');
    }
    public function pro_cat_country_image()
    {
        return $this->hasMany('App\Models\CountryImage','country_id','country_id');
    }
    public function pro_parent()
    {
        return $this->hasMany('App\Models\Categories', 'parent_id','parent_id');
    }

    public function parent_product()
    {
        return $this->hasMany('App\Models\ProductToWholesaleCategory', 'parent_id','parent_id');
    }
    public function cat_pro_price()
    {
        return $this->hasOne('App\Models\ProductPrice', 'product_id','product_id');
    }
    public function supp_images()
    {
        return $this->hasOne('App\Models\CompanyImage', 'company_id','company_id');
    }
    public function supp_pro_company_name()
    {
        return $this->hasOne('App\Models\CompanyDescription','company_id','company_id');
    }
    public function selected_suppliers()
    {
        return $this->hasMany('App\Models\SelectedSupplier','parent_id','parent_id');
    }
     public function most_view_category()
    {
        return $this->hasMany('App\Models\MostViewCategory', 'parent_id','parent_id');
    }
    public function bdtdc_customer()
    {
        return $this->hasOne('App\Models\Customer', 'company_id','company_id');
    }
}
