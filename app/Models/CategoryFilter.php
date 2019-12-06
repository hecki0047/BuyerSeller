<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryFilter extends Model
{
	     protected $table = 'category_filter';
    protected $guarded = array('created_at', 'updated_at');

   
   
     public function bdtdcCategory(){
	    	return $this->belongsTo('App\Models\Categories', 'category_id');
    }
    public function bdtdcFilter(){
			return $this->belongsTo('App\Models\Filter', 'filter_id');

	} 
}
