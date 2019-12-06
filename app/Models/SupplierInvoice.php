<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierInvoice extends Model
{
     protected $table = 'supplier_invoice';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['company_id','invoice_number'];

    public function membership(){
    	return $this->belongsTo('App\Models\SupplierInfo', 'membership_id','id');
    }
    public function order_invoice(){
    	return $this->hasOne('App\Models\OrderPaymentHistory', 'order_id','order_id');
    }
}
