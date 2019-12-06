<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsProductAttribute extends Model
{
    protected $table = 'ms_product_attribute';
	protected $guarded = array('created_at', 'updated_at');

   
public function bdtdcAttribute(){
    	return $this->belongsTo('App\Models\Attribute', 'attribute_id');
    }
    public function bdtdcAttributeValue(){
    	return $this->belongsTo('App\Models\AttributeValue', 'attribute_value_id');
    }

public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}
}
