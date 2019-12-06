<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierProduct extends Model
{
     protected $table = 'supplier_products';
	protected $guarded = array('created_at', 'updated_at');

 	public function suppliers(){
    	return $this->belongsTo('App\Models\Supplier', 'supplier_id','user_id');
    }
    public function supplier_membership(){
        return $this->hasOne('App\Models\SupplierInfo','id', 'supplier_id');
    }
    public function sup_companies(){
        return $this->hasOne('App\Models\Companies','user_id','supplier_id');
    }

    public function bdtdcProduct()
    {
    	return $this->belongsTo('App\Models\Products', 'product_id');
    }
    public  function users(){
        
     return $this->hasOne('App\Models\Users', 'id','supplier_id');
    }
    public function sup_main_products(){
        return $this->hasOne('App\Models\SupplierMainProduct','supplier_id','supplier_id');
    }
     
}
