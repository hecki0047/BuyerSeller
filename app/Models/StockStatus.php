<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockStatus extends Model
{
     protected $table = 'stock_status';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
