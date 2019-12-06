<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table="company_payment_currency";
    protected $fillable = ['payment_currency','company_id'];
}
