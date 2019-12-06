<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnHistory extends Model
{
    protected $table = 'history';
	protected $guarded = array('created_at', 'updated_at');
	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
	public function bdtdcReturnStatus(){
	return $this->belongsTo('App\Models\ReturnStatus','return_status_id')
}

public function bdtdcReturn(){
	return $this->belongsTo('App\Models\Return','return_id')
}


}
