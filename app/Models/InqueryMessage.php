<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InqueryMessage extends Model
{
  protected $table = "inquery_messages";
    protected $fillable = ['inquery_id','product_id','messages','quantity','unit_price','sender','product_owner_id','status','total'];

    /*
    Status list
    ------------
        1 = Approved
        2 = Pending
        
        3 = Rejected
        4 = Completed
        5 = Closed
    */
    
    public function bdtdcInqueryMessageProduct()
    {
    	return $this->hasOne('App\Models\Products','id','product_id');
    }
    public function bdtdcInquery()
    {
        return $this->hasOne('App\Models\SupplierInquery','id','inquery_id');
    }
    public function bdtdcInqueryMessageProductDescription()
    {
        return $this->hasOne('App\Models\ProductDescription','product_id','product_id');
    }
    public function bdtdcInqueryMessageDocs()
    {
        return $this->hasMany('App\Models\QuoteDocs','message_id','id');
    }
    public function bdtdcInqueryMessageDocsOne()
    {
        return $this->hasOne('App\Models\QuoteDocs','message_id','id');
    }
    public function bdtdcInqueryMessageProductImage()
    {
    	return $this->hasOne('App\Models\ProductImage','product_id','product_id');
    }
    public function bdtdcInqueryMessageProductImageNew()
    {
        return $this->hasOne('App\Models\ProductImageNew','product_id','product_id');
    }
    public function bdtdcInqueryMessageLogisticInfo()
    {
    	return $this->hasOne('App\Models\LogisticInfo','product_id','product_id');
    }
    public function bdtdcInqueryMessageProductCategory()
    {
        return $this->hasOne('App\Models\ProductToCategory','product_id','product_id');
    }
    public function bdtdcInqueryMessageUser()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function bdtdcInqueryMessageSender()
    {
        return $this->hasOne('App\Models\Users','id','sender');
    }
    public function bdtdcInqueryMessageProductCompany()
    {
        return $this->hasOne('App\Models\Company','user_id','product_owner_id');
    }
    public function bdtdcInqueryMessageProductCompanySender()
    {
        return $this->hasOne('App\Models\Company','user_id','sender');
    }
    public function bdtdcInqueryMessageProductprice()
    {
    	return $this->hasOne('App\Models\ProductPrice','product_id','product_id');
    }
    public function bdtdcInqueryMessageSupplier()
    {
        return $this->hasOne('App\Models\Supplier','user_id','product_owner_id');
    }
    public function bdtdcInqueryMessageSupplierSender()
    {
        return $this->hasOne('App\Models\Supplier','user_id','sender');
    }
    public function messagePerProductOwner(){
        return $this->hasMany('App\Models\InqueryMessage','product_owner_id','product_owner_id');
    }
    public function all_quote_messages()
    {
        return $this->hasMany('App\Models\InqueryMessage','quote_id','id');
    }
}
