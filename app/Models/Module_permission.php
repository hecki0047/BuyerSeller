<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module_permission extends Model
{
    protected $table = 'module_permissions';
    protected $guarded = array('created_at', 'updated_at');

    public function module()
    {
        return $this->belongsTo('App\Models\Module', 'module_id');
    }

    public function permission()
    {
    	return $this->belongsTo('App\Models\Permission', 'permission_id');
    }

}
