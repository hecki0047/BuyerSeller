<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierQuery extends Model
{
	 /*
    Status list
    ------------
        0 = Pending
        1 = Approved
        2 = Rejected
        3 = Completed
        4 = Closed
    */
    protected $table="supllier_inqueries";
    protected $fillable  = ['product_id','product_owner_id','unit_id','quantity','total_price','message','sender','status','is_join_quotation'];

     public function SupplierQueryProduct(){
    	return $this->hasOne('App\Models\Products','id','product_id');
    }
    public function productname(){
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function BdtdcInqueryMessage(){
        return $this->hasMany('App\Models\InqueryMessage','inquery_id','id');
    }
    public function queryproduct()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function SupplierQueryProductImage(){
    	return $this->hasOne('App\Models\ProductImage','product_id','product_id');
    }
    public function BdtdcSupplierQueryProductImages(){
        return $this->hasOne('App\Models\ProductImageNew','product_id','product_id');
    }
    public function BdtdcSupplierQueryProductDocs(){
        return $this->hasOne('App\Models\InqueryDocs','inquery_id','id');
    }
    public function bdtdcProductToCategory(){
        return $this->hasOne('App\Models\ProductToCategory', 'product_id','product_id');
    }
    public function SupplierQueryProductUnit(){
    	return $this->hasOne('App\Models\ProductUnit','id','unit_id');
    }
    public function product_owner_supplier()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function sender_name()
    {
        return $this->hasOne('App\Models\Companies','user_id','sender');
    }
}
