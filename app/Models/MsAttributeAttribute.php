<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsAttributeAttribute extends Model
{
   protected $table = 'ms_attribute_attribute';
	protected $guarded = array('created_at', 'updated_at');


public function bdtdcMsAttribute(){
    	return $this->belongsTo('App\Models\MsAttribute', 'ms_attribute_id');
    }
}
