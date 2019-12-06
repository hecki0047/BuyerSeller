<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WholesaleCategoryDescription extends Model
{
   
     protected $table = 'wholesale_category_description';
    protected $guarded = array('created_at', 'updated_at');

   
   
     public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\WholesaleCategory', 'category_id');
    }
    public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	} 
	public function bdtdcwholesaleCategory(){
    	return $this->hasOne('App\Models\WholesaleCategory', 'category_id','id');
    }
}
