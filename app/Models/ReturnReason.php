<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnReason extends Model
{
    protected $table = 'reason';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
