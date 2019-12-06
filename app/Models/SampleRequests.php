<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleRequests extends Model
{
     protected $table = 'sample_requests';
    protected $fillable = ['id','product_owner_id','message','sender','delivery_address','Expected_date_of_Arriva'];


    public function request_product()
    {
        return $this->hasOne('App\Models\SampleProducts','request_id');
    }

    public function buyer_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','sender');
    }

    public function supplier_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','product_owner_id');
    }
}
