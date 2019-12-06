<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $table = 'role_users';
    protected $guarded = array('created_at', 'updated_at');

    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }

    public function role()
    {
    	return $this->belongsTo('App\Models\Role', 'role_id');
    }
}
