<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeshowDescription extends Model
{
      protected $table = "tradeshow_descriptions";
    protected $fillable = ['tradeshow_id','language_id','title','description','meta_title','meta_description','meta_keyword'];

    public function relation()
    {
    	 return $this->belongsTo('App\Models\Tradeshow', 'tradeshow_id');
    }
}
