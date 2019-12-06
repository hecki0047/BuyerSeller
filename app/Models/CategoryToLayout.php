<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryToLayout extends Model
{
   protected $table = 'category_to_layout';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function bdtdcStore(){
    	return $this->belongsTo('App\Models\Store', 'store_id');
    }
     public function bdtdcLayout(){
    	return $this->belongsTo('App\Models\Layout', 'layout_id');
    }

}
