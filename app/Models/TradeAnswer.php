<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeAnswer extends Model
{
     protected $table = 'trade_answer';
	    protected $fillable = ['id','user_id','answer','question_id','created_at','updated_at'];


	    public function user()
	    {
	    	return $this->belongsTo('App\Models\Users','user_id','id');
	    }
	    public function trade_questions()
	    {
	    	return $this->belongsTo('App\Models\TradeQuestions','question_id','id');
	    }
}
