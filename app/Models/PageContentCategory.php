<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContentCategory extends Model
{
     protected $table = 'page_content_categories';
	protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['name','parent_id','sort_name','prefix','page_id'];

    public function bdtdc_content_desc()
    {
        return $this->hasOne('App\Models\PageContentDescription', 'content_category_id');
    }

    public function bdtdc_page()
    {
        return $this->belongsTo('App\Models\PagesPrefix', 'page_id');
    }

    public function content_parent_cat()
    {
        return $this->hasMany('App\Models\PageContentCategory','parent_id','id');
    }
}
