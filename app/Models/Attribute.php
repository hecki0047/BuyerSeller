<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    protected $guarded = array('created_at', 'updated_at');

   
    public function attributeGroup(){
    	return $this->belongsTo('App\Models\AttributeGroup', 'attribute_group_id');
    }
}
