<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
      protected $table = 'footer_sitemap';
	    protected $fillable=['id','name','parent_id','slug','sort_order'];
	    
	    public function sub_category()
	    {
	        return $this->hasMany('App\Models\Sitemap', 'parent_id','id');
	    }
}
