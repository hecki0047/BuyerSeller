<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialPage extends Model
{
    protected $table = 'special_pages';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\BdtdcCategory', 'category_id','id');
    }

    public function selected_copmany(){
    	return $this->belongsTo('App\Models\BdtdcCompany', 'company_id','id');
    }
    
    public function selected_copmany_name(){
    	return $this->hasOne('App\Models\BdtdcCompanyDescription', 'company_id','company_id');
    }
     
     public function BdtdcSelectedSupplier_products()
     {
        return $this->hasOne('App\Models\Products','id','product_id');
     }
     public function pro_name_string()
     {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
     }

      public function select_product_image()
    {
        return $this->hasOne('App\Models\ProductImage', 'product_id','product_id');
    }
    public function select_product_images()
    {
        return $this->hasOne('App\Models\ProductImageNew', 'product_id','product_id');
    }
    public function cat_pro_price()
    {
        return $this->hasOne('App\Models\ProductPrice', 'product_id','product_id');
    }
    public function parent_cat()
    {
        return $this->hasOne('App\Models\Categories','id','parent_id');
    }
    public function pro_to_cat(){
        return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
    }
    public function cat_product()
    {
        return $this->hasMany('App\Models\SpecialPage','category_id','category_id');
    }
}
