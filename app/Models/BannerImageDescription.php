<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerImageDescription extends Model
{
     protected $table = 'banner_image_description';
    protected $guarded = array('created_at', 'updated_at');

   
   public function bdtdcBannerImage(){
		return $this->belongsTo('App\Models\BannerImage', 'banner_image_id');

	} 
     public function bdtdcBanner(){
    	return $this->belongsTo('App\Models\Banner', 'banner_id');
    }
    public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	} 
}
