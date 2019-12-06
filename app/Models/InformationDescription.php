<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationDescription extends Model
{
     protected $table = 'information_description';
	protected $guarded = array('created_at', 'updated_at');

  
  
    public function bdtdcInformation(){
		return $this->belongsTo('App\Models\Information', 'information_id');

   }
   public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
