<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactoryInfo extends Model
{
    protected $table = 'company_factory_info';
    protected $guarded = array('created_at', 'updated_at');
    protected $fillable=['factory_location','factory_size','contact_manufacturing','oem_experience','no_of_qc_staff','no_of_rd_staf','no_of_production_line','anual_value','company_id','has_more_anual_production_capacity'];
    

     public function company(){
    	return $this->belongsTo('App\Models\Companies', 'company_id');
    }
    public function form_factory_size(){
        return $this->hasOne('App\Models\FormValue', 'id', 'factory_size');
    }
    public function form_anual_value(){
        return $this->hasOne('App\Models\FormValue', 'id', 'anual_value');
    }
    public function form_no_of_production_line(){
        return $this->hasOne('App\Models\FormValue', 'id', 'no_of_production_line');
    }
    public function form_qc_staff(){
        return $this->hasOne('App\Models\FormValue', 'id', 'no_of_qc_staff');
    }
    public function form_rd_staf(){
        return $this->hasOne('App\Models\FormValue', 'id', 'no_of_rd_staf');
    }
}
