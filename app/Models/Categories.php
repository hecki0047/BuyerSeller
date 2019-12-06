<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
	    protected $guarded = array('created_at', 'updated_at');

	     public function category_name()
	    {
	        return $this->hasOne('App\Models\CategoryDescription','category_id');
	    }
	    public function product_category()
	    {
	    	return $this->hasMany('App\Models\ProductToCategory','category_id','id');
	    }
	    public function parent_cat()
	    {
	    	return $this->hasMany('App\Models\Categories','parent_id','id');
	    }

	    public function cat_parent_cat()
	    {
	    	return $this->hasMany('App\Models\Categories','parent_id','parent_id');
	    }

	    public function parent_cat_pro()
	    {
	    	return $this->hasMany('App\Models\ProductToCategory','parent_id','id');
	    }

	    public function sub_cat_pro()
	    {
	    	return $this->hasOne('App\Models\ProductToCategory','category_id','id');
	    }
	    public function sub_cat(){
	    	return $this->hasMany('App\Models\Categories','parent_id','id');
	    }
}
