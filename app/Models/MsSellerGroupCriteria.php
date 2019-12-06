<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsSellerGroupCriteria extends Model
{
     protected $table = 'ms_seller_group_criteria';
	protected $guarded = array('created_at', 'updated_at');



 public function bdtdcMsCriteria(){
    	return $this->belongsTo('App\Models\MsCriteria', 'criteria_id');
    }
    public function bdtdcMsCommission(){
    	return $this->belongsTo('App\Models\MsCommission', 'commission_id');
    }
}
