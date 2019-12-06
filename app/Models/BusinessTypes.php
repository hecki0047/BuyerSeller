<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessTypes extends Model
{
   protected $table = 'business_types';
	protected $guarded = array('created_at', 'updated_at');

	 public function suppliers()
	 {
	 	return $this->hasOne('App\Models\Supplier','busines_type_id');
	 }
}
