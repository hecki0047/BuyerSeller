<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectedSupplier extends Model
{
     protected $table = 'selected_supplier';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\Categories', 'category_id','id');
    }

    public function selected_copmany(){
    	return $this->belongsTo('App\Models\Companies', 'company_id','id');
    }
    
    public function selected_copmany_name(){
    	return $this->hasOne('App\Models\CompanyDescription', 'company_id','company_id');
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

    public function selected_country_suppliers_v()
    {
        return $this->hasMany('App\Models\SelectedSupplier', 'parent_id','parent_id');
    }
}
