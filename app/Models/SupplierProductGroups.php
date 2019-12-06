<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierProductGroups extends Model
{
     protected $table = 'supplier_product_groups';
	protected $guarded = array('created_at', 'updated_at');

	public function BdtdcSupplierProductGroupsProducts()
	{
	   return $this->hasMany('App\Models\Products','product_groups','id');
	}

	public function BdtdcSupplierProductGroups()
	{
	   return $this->hasOne('App\Models\Products','product_groups','id');
	}

	public function company_group()
	{
		return $this->belongsTo('App\Models\Companies','company_id');
	}
}
