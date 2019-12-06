<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomFolder extends Model
{
     protected $table = 'custom_folder';
    protected $guarded = array('created_at', 'updated_at');
    
}
