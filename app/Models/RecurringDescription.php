<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecurringDescription extends Model
{
      protected $table = 'recurring_description';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}

 public function bdtdcRecurring(){
	return $this->belongsTo('App\Model\Recurring','recurring_id');
}



}
