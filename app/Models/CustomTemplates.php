<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomTemplates extends Model
{
     
    protected $table = 'custom_templetes';
    protected $guarded = array('created_at', 'updated_at');
}
