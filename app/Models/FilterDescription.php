<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterDescription extends Model
{
     protected $table = 'filter_description';
	protected $guarded = array('created_at', 'updated_at');

  
  public function bdtdcFilter(){
		return $this->belongsTo('App\Models\Filter', 'filter_id');

   }
    public function bdtdcFilterGroup(){
		return $this->belongsTo('App\Models\FilterGroup', 'filter_group_id');

   }
   public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
