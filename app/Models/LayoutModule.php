<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayoutModule extends Model
{
    protected $table = 'layout_module';
	protected $guarded = array('created_at', 'updated_at');

  
  
     public function bdtdcLayout(){
    	return $this->belongsTo('App\Models\Layout', 'layout_id');
    }
}
