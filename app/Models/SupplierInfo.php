<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierInfo extends Model
{
    protected $table = 'suppliers_info';
    protected $guarded = array('created_at', 'updated_at');
    
    public function name_string(){
		return $this->hasOne('App\Models\CompanyDescription', 'company_id','company_id');

	}

	public function name_string_company(){
		return $this->belongsTo('App\Models\CompanyDescription', 'company_id','company_id');

	}

	public function company()
	{
		return $this->hasOne('App\Models\Companies', 'id','company_id');
	}
	public function customer()
	{
		return $this->hasOne('App\Models\Customer', 'company_id','company_id');
	}

	public function product_to_category()
	{
		return $this->hasOne('App\Models\ProductToCategory', 'company_id','company_id');
	}
	public function product_category()
	{
		return $this->hasMany('App\Models\ProductToCategory', 'company_id','company_id');
	}
	public function invoice()
    {
	   	return $this->hasOne('App\Models\SupplierInvoice','membership_id', 'id');
    }
   
    public function business_supplier()
    {
	   	return $this->belongsTo('App\Models\Supplier', 'company_id','company_id');
    }
    public function supp_pro_company()
    {
        return $this->belongsTo('App\Models\Companies','company_id','company_id');
    }
    public function supp_pro_pack()
    {
        return $this->hasOne('App\Models\SupplierPackage','id','membership_pakacge_id');
    }
    public function supp_pro_packname()
    {
        return $this->hasOne('App\Models\SupplierPackageDescription','supplier_package_id','membership_pakacge_id');
    }

}
