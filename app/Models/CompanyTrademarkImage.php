<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTrademarkImage extends Model
{
  protected $table="trademarks_image";
    protected $fillable=['company_id','image'];
}
