<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsAttributeValue extends Model
{
    protected $table = 'ms_attribute_value';
	protected $guarded = array('created_at', 'updated_at');



public function bdtdcAttribute(){
    	return $this->belongsTo('App\Models\Attribute', 'attribute_id');
    }
}
