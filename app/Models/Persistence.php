<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persistence extends Model
{
     protected $table = 'persistences';
    protected $guarded = array('created_at', 'updated_at');

     public function user()
    {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }
}
