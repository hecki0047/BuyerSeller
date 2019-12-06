<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderShippingTerm extends Model
{
    protected $fillable=['user_id'];

    public function country_info()
    {
      return $this->belongsTo('App\Models\Country', 'country','id');
    }
}