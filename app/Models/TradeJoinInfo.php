<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeJoinInfo extends Model
{
    protected $table="trade_join_info";
    protected $fillable =['company_id','market_distribution','nearest_port','accepted_delivery_terms','accepted_payment_currency','accepted_payment_type','language_spoken'];

    public function BdtdcCompanies(){
        return $this->belongsTo('App\Models\Companies', 'company_id');
    }
}
