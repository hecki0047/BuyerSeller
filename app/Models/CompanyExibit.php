<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyExibit extends Model
{
    protected $table = 'company_exibit';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable = ['company_id','tradeshow_id'];

    public function tradeshow()
    {
    	return $this->hasOne('App\Models\Tradeshow','id','tradeshow_id');
    }

}
