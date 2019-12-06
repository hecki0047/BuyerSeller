<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinQuotation extends Model
{
      protected $table = "join_quotation";
    protected $fillable = ['product_id','product_owner_id','sender','message','is_join_quotation'];

    public function product_owner_user()
    {
        return $this->hasOne('App\Models\Users','id','product_owner_id');
    }
    public function product_owner_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','product_owner_id');
    }
    public function inq_sender_user()
    {
        return $this->hasOne('App\Models\Users','id','sender');
    }
    public function sender_company()
    {
        return $this->hasOne('App\Models\Companies','user_id','sender');
    }
    public function inq_message()
    {
        return $this->hasMany('App\Models\InqueryMessage','inquery_id','id');
    }
}
