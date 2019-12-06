<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDispute extends Model
{
    protected $table = 'bdtdc_product_disputes';
     protected $fillable = ['reason','url','description','file'];
     protected $guarded = array('created_at', 'updated_at');
}
