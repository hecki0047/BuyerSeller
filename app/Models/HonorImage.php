<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HonorImage extends Model
{
    
    protected $table="honor_image";
    protected $fillable=['company_id','image'];
}
