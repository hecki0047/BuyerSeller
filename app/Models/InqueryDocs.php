<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InqueryDocs extends Model
{
     protected $table = 'inquery_docs';
    // protected $guarded = array('created_at', 'updated_at');

    protected $fillable = ['inquery_id','docs','is_join_quote'];

    //docs folder: buying-request-docs


}
