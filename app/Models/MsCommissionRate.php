<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsCommissionRate extends Model
{
    protected $table = 'ms_commission_rate';
protected $guarded = array('created_at', 'updated_at');

   
public function bdtdcCommission(){
    	return $this->belongsTo('App\Models\Commission', 'commission_id');
    }
}
