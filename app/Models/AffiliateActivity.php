<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AffiliateActivity extends Model
{
    protected $table = 'affiliate_activity';
    protected $guarded = array('created_at', 'updated_at');

   
    public function bdtdcAffiliate(){
    	return $this->belongsTo('App\Models\Affiliate', 'affiliate_id');
    }
}
