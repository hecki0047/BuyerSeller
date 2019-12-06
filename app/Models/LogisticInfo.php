<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogisticInfo extends Model
{
      protected $table = 'logistic_infos';
    protected $guarded = array('created_at', 'updated_at');

    public function product_logi_info()
    {
    	return $this->belongsTo('App\Models\Products','product_id');
    }

}
