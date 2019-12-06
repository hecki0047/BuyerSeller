<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRule extends Model
{
    protected $table = 'tax_rule';
	protected $guarded = array('created_at', 'updated_at');


	public function bdtdcTaxRate(){
    	return $this->belongsTo('App\Models\TaxRate', 'tax_rate_id');
    }

	public function bdtdcTaxClass(){
    	return $this->belongsTo('App\Models\TaxClass', 'tax_class_id');
    }
}
