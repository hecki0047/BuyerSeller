<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerGroupDescription extends Model
{
     protected $table = 'customer_group_description';
	protected $guarded = array('created_at', 'updated_at');

public function bdtdcCustomerGroup(){
    	return $this->belongsTo('App\Models\CustomerGroup', 'customer_group_id');
    }
  public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}
}
