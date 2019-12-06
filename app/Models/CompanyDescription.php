<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDescription extends Model
{
     protected $table = 'company_descriptions';
    protected $guarded = array('created_at', 'updated_at');

   
   
    public function bdtdcCategory()
     {
    	return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function bdtdcLanguage()
    {
		return $this->belongsTo('App\Models\Language', 'language_id');

	} 
	public function bdtdcCompany()
	{
		return $this->belongsTo('App\Models\Company', 'company_id');

	}
    public function company_product()
    {
        return $this->hasMany('App\Models\ProductToCategory', 'company_id','company_id');
    }
    
    public function customer_activity()
    {
        return $this->hasMany('App\Models\CustomerActivity', 'data','company_id');
    }
    
}
