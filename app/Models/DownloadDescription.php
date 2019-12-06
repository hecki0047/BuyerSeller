<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DownloadDescription extends Model
{
    protected $table = 'download_description';
	protected $guarded = array('created_at', 'updated_at');

  

 public function bdtdcDownload(){
		return $this->belongsTo('App\Models\Download', 'download_id');

	}
 public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
