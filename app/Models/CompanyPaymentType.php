<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPaymentType extends Model
{
     protected $table = 'company_payment_types';
    protected $guarded = array('created_at', 'updated_at');
    
    public function company(){
    	return $this->belongsTo('App\Models\Companies', 'company_id');
    }
}
