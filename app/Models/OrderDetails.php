<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['order_id','product_name','product_details','product_id','product_image','quantity','unit_id','unit_price'];

    public function productDetails()
    {
        return $this->hasOne('App\Models\Products','id','product_id');
    }
    public function orderProductDetails()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function orderProductUnit(){
        return $this->hasOne('App\Models\ProductUnit','id','unit_id');
    }

}
