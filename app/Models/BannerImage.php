<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    protected $table = 'banner_image';
    protected $guarded = array('created_at', 'updated_at');

   
     public function bdtdcBanner(){
    	return $this->belongsTo('App\Models\Banner', 'banner_id');
    }
}
