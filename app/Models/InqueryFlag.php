<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InqueryFlag extends Model
{
	 protected $table = "inquery_flag";
    protected $fillable = ['inquery_id','user_took_action','is_join_quotation'];
}
