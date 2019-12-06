<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyImage extends Model
{
    
    protected $table = "company_images";
    protected $fillable = ['image','company_id'];
}
