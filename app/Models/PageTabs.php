<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTabs extends Model
{
    protected $table = 'page_tabs';
    protected $guarded = array('created_at', 'updated_at');

    public function page(){
        return $this->belongsTo('App\Models\PagesPrefix', 'page_id');
    }
}
