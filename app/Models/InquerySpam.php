<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquerySpam extends Model
{
    protected $table="inquery_spam";
    protected $fillable = ['inquery_id','user_took_action','is_join_quotation'];
}
