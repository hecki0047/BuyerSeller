<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnAction extends Model
{
     protected $table = 'action';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
