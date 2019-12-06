<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormValue extends Model
{
    protected $table="form_values";

    public function tradeinfo()
    {
    	return $this->belongsTo('App\Models\TradeInfo', 'anual_sales_volume');
    }
    public function tradeinfos()
    {
    	return $this->belongsTo('App\Models\TradeInfo', 'trade.export_percentage');
    }
    
}
