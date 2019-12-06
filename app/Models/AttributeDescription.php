<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeDescription extends Model
{
    protected $table = 'attribute_description';
    protected $guarded = array('created_at', 'updated_at');

   
     public function bdtdcAttribute(){
    	return $this->belongsTo('App\Models\Attribute', 'attribute_id');
    }
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	} 
}
