<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUnit extends Model
{
    protected $table = 'product_unit';
    protected $guarded = array('created_at', 'updated_at');

    public function product()
    {
        return $this->hasOne('App\Models\Products','unit_type_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'category_id');
    }

    public function sample_request_unit()
    {
        return $this->belongsTo('App\Models\SampleProducts','unit_id');
    }
}
