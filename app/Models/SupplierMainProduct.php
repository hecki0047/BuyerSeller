<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierMainProduct extends Model
{
     protected $table 	= 'supplier_main_products';
	protected $guarded 	= array('created_at', 'updated_at');
	protected $fillable = ['supplier_id','product_name_1','product_name_2','product_name_3'];
	
	public function suppliers()
	{
		return $this->belongsTo('App\Models\Supplier','supplier_id','id');
	}

	public function suppliers_products()
	{
		return $this->belongsTo('App\Models\SupplierProduct','supplier_id','supplier_id');
	}

	public function business_port()
    {
        return $this->belongsTo('App\Models\LogisticInfo','product_id','product_id');
    }
    public function payment_method()
    {
        return $this->belongsTo('App\Models\Products','product_id','id');
    }
}
