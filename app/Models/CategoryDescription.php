<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDescription extends Model
{
    protected $table = 'category_description';
    protected $guarded = array('created_at', 'updated_at');

   
    public function bdtdcCategory(){
    	return $this->belongsTo('App\Models\Categories', 'category_id');
    }
    //public function bdtdcLanguage(){
    public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	} 
	public function sub_cat()
	{
		return $this->hasMany('App\Models\Categories','parent_id','category_id');
	}
	public function cat_name()
	{
		return $this->hasOne('App\Models\Categories','id','category_id');
	}
}
