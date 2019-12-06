<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToCategory extends Model
{
    protected $table = 'product_to_category';
	protected $guarded = array('created_at', 'updated_at');

	 public function MostViewCategory()
    {
        return $this->belongsTo('App\Models\MostViewCategory','product_id','product_id');
    }
	public function bdtdcProduct()
    {
	   return $this->belongsTo('App\Models\Products','product_id','id');
	}
    public function pro_to_cat_name()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
	public function bdtdcCategory()
    {
    	return $this->belongsTo('App\Models\Categories', 'category_id','id');
    }

    public function BdtdcCategoryDescription()
    {
        return $this->hasOne('App\Models\CategoryDescription','category_id','category_id');
    }
    public function BdtdcParentCategoryDescription()
    {
        return $this->hasOne('App\Models\CategoryDescription','category_id','parent_id');
    }
    public function pro_images()
    {
    	return $this->hasOne('App\Models\ProductImage', 'product_id','product_id');
    }
    public function images()
    {
        return $this->belongsTo('App\Models\ProductImage', 'product_id','product_id');
    }
    public function images_new()
    {
        return $this->belongsTo('App\Models\ProductImageNew', 'product_id','product_id');
    }
    public function pro_images_new()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','product_id');
    }
    public function inquery()
    {
    	return $this->hasMany('App\Models\SupplierQuery','product_id','product_id');
    }
    public function supplier_inquery()
    {
        return $this->hasMany('App\Models\SupplierInquery','product_id','product_id');
    }
    public function category_product_name()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function category_product_id()
    {
        return $this->hasOne('App\Models\Products','id','product_id');
    }
     public function supp_pro_company()
    {
        return $this->belongsTo('App\Models\Companies','company_id','id');
    }
    public function supp_pro_company_name()
    {
        return $this->hasOne('App\Models\CompanyDescription','company_id','company_id');
    }
    public function pro_parent_cat()
    {
        return $this->belongsTo('App\Models\Categories', 'parent_id','id');
    }
    public function cat_country(){

        return $this->belongsTo('App\Models\Country', 'country_id','id');
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
        return $this->hasMany('App\Models\ProductToCategory', 'parent_id','parent_id');
    }
    public function cat_pro_price()
    {
        return $this->hasOne('App\Models\ProductPrice', 'product_id','product_id');
    }
    public function selected_suppliers()
    {
        return $this->hasMany('App\Models\SelectedSupplier', 'parent_id','parent_id');
    }

    public function selected_country_suppliers()
    {
        return $this->hasMany('App\Models\SelectedSupplier', 'country_id','country_id');
    }

    public function selected_china_suppliers()
    {
        return $this->hasMany('App\Models\ChinaSupplier', 'parent_id','parent_id');
    }
    public function most_view_category()
    {
        return $this->hasMany('App\Models\MostViewCategory', 'parent_id','parent_id');
    }
    public function bdtdc_customer()
    {
        return $this->hasOne('App\Models\Customer', 'company_id','company_id');
    }
    public function bdtdc_suppliers()
    {
        return $this->hasOne('App\Models\Supplier', 'company_id','company_id');
    }
    public function tradeinfo()
    {
         return $this->hasOne('App\Models\TradeInfo','company_id','company_id');
    }
    public function factoryinfo()
    {
         return $this->hasOne('App\Models\FactoryInfo','company_id','company_id');
    }
    public function companymainmarket()
    {
        return $this->hasOne('App\Models\CompanyMainMarket','company_id','company_id');
    }

     public function bdtdc_main_market()
    {
        return $this->hasMany('App\Models\CompanyMainMarket','company_id','company_id');
    }
    public function BdtdcSupplierProduct()
    {
        return $this->hasOne('App\Models\SupplierProduct','product_id','product_id');
    }
    public function supplier_info(){
        return $this->hasOne('App\Models\SupplierInfo','company_id','company_id');
    }
    public function supplier_infos(){
        return $this->hasMany('App\Models\SupplierInfo','company_id','company_id');
    }

    public function BdtdcWholesaleCategoryDescription()
    {
        return $this->belongsTo('App\Models\WholesaleCategoryDescription','category_id','category_id');
    }
     public function supp_company()
    {
        return $this->hasOne('App\Models\Companies','id','company_id');
    }
    public function BdtdcAllCategoryProduct()
    {
        return $this->hasMany('App\Models\ProductToCategory','category_id','category_id');
    }
    public function suppliers_other_products()
    {
        return $this->hasMany('App\Models\ProductToCategory','category_id','category_id')->where('company_id','=',$this->company_id)->where('product_id','!=',$this->product_id)->orderByRaw("RAND()")->take(6);
    }
    public function other_wholesalers_products()
    {
        return $this->hasMany('App\Models\ProductToCategory','category_id','category_id')->where('company_id','!=',$this->company_id)->orderByRaw("RAND()")->take(8);
    }
    public function supplier_main_certificates(){
        return $this->hasMany('App\Models\CertificationImage','company_id','company_id');
    }
    public function supplier_honor_certificates(){
        return $this->hasMany('App\Models\HonorImage','company_id','company_id');
    }
    public function supplier_patents(){
        return $this->hasMany('App\Models\PatentImage','company_id','company_id');
    }
    public function supplier_trademarks(){
        return $this->hasMany('App\Models\TrademarksImage','company_id','company_id');
    }

}
