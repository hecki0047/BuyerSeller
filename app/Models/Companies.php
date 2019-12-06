<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
     protected $table = 'companies';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['user_id','location_of_reg','year_of_reg','city','region','zip_code','postal_code','total_employe','company_website','office_suite'];

    public function factory_info()
    {
        return $this->hasOne('App\Models\FactoryInfo','company_id','id');
    }

    public function company_exhibit()
    {
        return $this->hasMany('App\Models\CompanyExibit','company_id','id');
    }

    public function agent_service()
    {
        return $this->hasMany('App\Models\CompanyService','company_id','id');
    }
   
    public function agent()
    {
        return $this->hasOne('App\Models\Agent','company_id','id');
    }
    public function customers()
    {
    	return $this->belongsTo('App\Models\Customer', 'user_id','user_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }

    public function Role_user()
    {
        return $this->hasOne('App\Models\Role_user', 'user_id', 'user_id');
    }

    public function name_string()
    {
		return $this->hasOne('App\Models\CompanyDescription', 'company_id','id');

	}

    public function location_of_reg_string()
    {
        return $this->belongsTo('App\Models\Country','location_of_reg','id');
    }
    public function country_by_city()
    {
        return $this->belongsTo('App\Models\Country','city','id');
    }
    public function company_description()
    {
        return $this->hasOne('App\Models\CompanyDescription','company_id','id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country','location_of_reg','id');
    }
    public function company_image()
    {
        return $this->hasOne('App\Models\CompanyImage','company_id','id');
    }
    public function tradeinfo()
    {
         return $this->hasOne('App\Models\TradeInfo','company_id');
    }
    public function tradejoininfo()
    {
        return $this->hasOne('App\Models\TradeJoinInfo','company_id');
    }
    public function companymainmarket()
    {
        return $this->hasOne('App\Models\CompanyMainMarket','company_id');
    }
    public function main_market()
    {
        return $this->hasMany('App\Models\CompanyMainMarket','company_id','id');
    }
    public function supplier_info()
    {
        return $this->hasOne('App\Models\SupplierInfo','company_id','id');
    
    }

    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier','company_id','id');
    }

    public function main_products()
    {
        return $this->hasOne('App\Models\SupplierMainProduct','supplier_id','user_id');
    }
    public function supplierInfo()
    {
        return $this->belongsTo('App\Models\SupplierInfo','company_id');
    }
    public function company_product_to_category()
    {
        return $this->hasMany('App\Models\ProductToCategory','company_id','id');
    }

    
}
