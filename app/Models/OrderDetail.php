<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
     protected $table = 'order_details';
	protected $guarded = array('created_at', 'updated_at');


 
    public function bdtdcorders()
    {
        return $this->hasOne('App\Models\Order','id','order_detais_id');
    }

}
