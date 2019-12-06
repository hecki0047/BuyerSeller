<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationToLayout extends Model
{
     protected $table = 'information_to_layout';
	protected $guarded = array('created_at', 'updated_at');

  
  
    public function bdtdcInformation(){
		return $this->belongsTo('App\Models\Information', 'information_id');

   }
   public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
     public function bdtdcLayout(){
    	return $this->belongsTo('App\Models\Layout', 'layout_id');
    }
}
