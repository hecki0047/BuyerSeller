<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeGroupDescription extends Model
{
    protected $table = 'attribute_group_description';
    protected $guarded = array('created_at', 'updated_at');

   
     public function bdtdcAttributeGroup(){
    	return $this->belongsTo('App\Models\AttributeGroup', 'attribute_group_id');
    }
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	
}
