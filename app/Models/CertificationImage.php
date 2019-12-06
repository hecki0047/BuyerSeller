<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationImage extends Model
{
    protected $table="certification_img";
    protected $fillable=['company_id','image'];
}
