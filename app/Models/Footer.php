<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
     protected $table = 'footers';
     protected $fillable=['id','category_name','parent_id','slug','status'];

     public function sub_pages(){

  		return $this->hasMany('App\Models\Footer','parent_id','id')->where('status',1);
  }
}
