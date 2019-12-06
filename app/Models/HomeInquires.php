<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeInquires extends Model
{
   protected $table = "home_inquires";
    protected $fillable = ['id','inquiry_id','view','images','show','sort'];
    
}
