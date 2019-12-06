<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAwardCertification extends Model
{
    protected $table = 'company_honor_award_certifications';
    protected $guarded = array('created_at', 'updated_at');
    
    public function company(){
    	return $this->belongsTo('App\Models\Companies', 'company_id');
    
}
