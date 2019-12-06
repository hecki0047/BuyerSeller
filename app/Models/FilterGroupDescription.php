<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterGroupDescription extends Model
{
   protected $table = 'filter_group_description';
	protected $guarded = array('created_at', 'updated_at');

  
  
    public function bdtdcFilterGroup(){
		return $this->belongsTo('App\Models\FilterGroup', 'filter_group_id');

   }
   public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
