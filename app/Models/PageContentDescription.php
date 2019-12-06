<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContentDescription extends Model
{
      protected $table = 'page_content_descriptions';
	protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['description','meta_key','meta_description','content_category_id','page_id'];

    public function bdtdc_page()
    {
        return $this->belongsTo('App\Models\PagesPrefix', 'page_id');
    }

    public function bdtdc_category()
    {
        return $this->belongsTo('App\Models\PageContentCategory', 'content_category_id');
    }
}
