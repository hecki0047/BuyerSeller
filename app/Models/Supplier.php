<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
      protected $table = 'suppliers';
	protected $guarded = array('created_at', 'updated_at');


    public function supplier_package()
    {
    	return $this->belongsTo('App\Models\SupplierPackage', 'supplier_package_id');
    }
    public function package_name()
    {
         return $this->hasOne('App\Models\SupplierPackageDescription','supplier_package_id');
   
    }
    public function business_types()
    {
        return $this->belongsTo('App\Models\BusinesType','busines_type_id');
    }
    public function main_products()
    {
        return $this->hasOne('App\Models\SupplierMainProduct','supplier_id','id');
    }
    public function bdtdcMsCommission()
    {
    	return $this->belongsTo('App\Models\MsCommission', 'commission_id');
    }
    public function supplier_products()
    {
        return $this->hasMany('App\Models\SupplierProduct','supplier_id');
    }

    public function bdtdcCountry()
    {
    	return $this->hasOne('App\Models\Country','id', 'country_id');
    }
    public function bdtdcZone()
    {
    	return $this->belongsTo('App\Models\Zone', 'zone_id');
    }
    public function customers()
    {
        return $this->hasOne('App\Models\Customer','user_id','user_id');
    }

    public function company_name()
    {
        return $this->hasOne('App\Models\Company','user_id','user_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }




}
