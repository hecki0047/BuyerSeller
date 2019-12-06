<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
     protected $table = 'customer_group';
	protected $guarded = array('created_at', 'updated_at');

}
