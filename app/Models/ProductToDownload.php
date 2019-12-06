<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductToDownload extends Model
{
      protected $table = 'product_to_download';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcProduct(){

	return $this->belongsTo('App\Models\Products','product_id');
}
public function bdtdcDownload(){
		return $this->belongsTo('App\Models\Download', 'download_id');

	}

}
