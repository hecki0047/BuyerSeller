<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRateToCustomerGroup extends Model
{
    
     protected $table = 'tax_rate_to_customer_group';
	protected $guarded = array('created_at', 'updated_at');


	public function bdtdcTaxRate(){
    	return $this->belongsTo('App\Models\TaxRate', 'tax_rate_id');
    }

	public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
}
