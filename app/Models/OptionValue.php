<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $table = 'option_value';
protected $guarded = array('created_at', 'updated_at');


public function bdtdcOption(){
		return $this->belongsTo('App\Models\Option', 'option_id');

	}
}
