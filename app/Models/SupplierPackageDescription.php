<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierPackageDescription extends Model
{
     protected $table = 'supplier_package_descriptions';
	protected $guarded = array('created_at', 'updated_at');




    public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
	public function packages()
	{
		return $this->belongsTo('App\Models\SupplierPackage','supplier_package_id');
	}

}
