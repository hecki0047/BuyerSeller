<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayoutRoute extends Model
{
 	protected $table = 'layout_route';
	protected $guarded = array('created_at', 'updated_at');

  
  public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
     public function bdtdcLayout(){
    	return $this->belongsTo('App\Models\Layout', 'layout_id');
    }
}
