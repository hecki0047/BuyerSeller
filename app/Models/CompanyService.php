<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
     protected $table = 'company_services';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['company_id','name'];

   
}
