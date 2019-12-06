<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WholesaleCategory extends Model
{
     protected $table = 'wholesale_category';
	    protected $guarded = array('created_at', 'updated_at');
	    
	    public function category_name()
	    {
	        return $this->hasOne('App\Models\WholesaleCategoryDescription','category_id');
	    }

	    public function category_name_wholesale()
	    {
	        return $this->belongsTo('App\Models\WholesaleCategoryDescription','category_id');
	    }
	    public function parent_cat()
	    {
	    	return $this->hasMany('App\Models\Categories','parent_id','id');
	    }
}
