<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationToStore extends Model
{
    protected $table = 'information_to_store';
	protected $guarded = array('created_at', 'updated_at');

  
  
    public function bdtdcInformation(){
		return $this->belongsTo('App\Models\Information', 'information_id');

   }
   public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
    
}
