<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Throttle extends Model
{
   protected $table = 'throttle';
    protected $guarded = array('created_at', 'updated_at');

}
