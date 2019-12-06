<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
     protected $table = 'agents';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['company_id','industry','experience','education','main_customer','join_date','is_active'];

}
