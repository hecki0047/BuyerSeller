<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagesPrefix extends Model
{
     protected $table = 'pages_prefix';
	protected $guarded = array('created_at', 'updated_at');

	  public function page_contents()
    {
        return $this->hasMany('App\Models\PageContent','page_id');
    }

    public function content_descriptions()
    {
        return $this->hasMany('App\Models\PageContentDescription', 'page_id');
    }

    public function content_categories()
    {
        return $this->hasMany('App\Models\PageContentCategory', 'page_id');
    }

    public function bdtdc_page_tabs(){
        return $this->hasMany('App\Models\PageTabs', 'page_id');
    }
}
