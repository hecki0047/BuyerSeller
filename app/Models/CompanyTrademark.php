<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTrademark extends Model
{
     protected $table    ="trademarks";
    protected $fillable = ['company_id','registration_no','start_date','end_date','scope'];
}
