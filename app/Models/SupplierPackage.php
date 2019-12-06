<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierPackage extends Model
{
     protected $table = 'supplier_packages';
	protected $guarded = array('created_at', 'updated_at');


    public function bdtdcMsCommission(){
    	return $this->belongsTo('App\Models\MsCommission', 'commission_id');
    }
    public function descriptions()
    {
    	return $this->hasOne('App\Models\SupplierPackageDescription','supplier_package_id');
    }
    
}
