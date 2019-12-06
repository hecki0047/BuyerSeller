<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $table = 'order';
    protected $fillable = ['inquery_id','quote_id','messages','quantity','shipping_method','payment_terms','sender','product_owner_id','initial_payment','status','coverage_type','is_msg','is_view','waiting_status','process_status','shipping_fee','insurance_charge','shipment_date','shipment_date_type','shipment_days_after','shipping_address_id'];

    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetails','order_id','id');
    }
    public function inq_sender_user()
    {
        return $this->hasOne('App\Models\Users','id','sender');
    }
    public function product_owner_user()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function sender_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','sender');
    }
    public function product_owner_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','product_owner_id');
    }
    public function bdtdcInqueryMessageSender()
    {
        return $this->hasOne('App\Models\Users','id','sender');
    }
    public function orderInquiry()
    {
        return $this->hasOne('App\Models\SupplierInquery','id','inquery_id');
    }
    public function paymentHistory(){
        return $this->hasOne('App\Models\OrderPaymentHistory','order_id','id');
    }
    
}
