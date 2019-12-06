<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filter';
	protected $guarded = array('created_at', 'updated_at');

  
    public function bdtdcFilterGroup(){
		return $this->belongsTo('App\Models\FilterGroup', 'filter_group_id');

   }
}
