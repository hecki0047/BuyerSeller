<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyMainMarket extends Model
{
    protected $table = 'company_main_markets';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['company_id','main_market_zone','distribution_value'];
    
    public function company()
    {
    	return $this->belongsTo('App\Models\Company', 'company_id');
    }
    public function main_market()
    {
    	return $this->belongsTo('App\Models\Country', 'id','main_market_zone');
    }
    public function company_main_market()
    {
        return $this->hasOne('App\Models\Country', 'id','main_market_zone');
    }
    public function form_value()
    {
        return $this->belongsTo('App\Models\FormValue', 'main_market_zone', 'id');
    }
    
}
