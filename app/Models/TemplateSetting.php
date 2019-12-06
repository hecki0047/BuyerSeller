<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateSetting extends Model
{
     protected $table = 'template_settings';
    protected $guarded = array('created_at', 'updated_at');

      public function template_section()
	{
		return $this->belongsTo('App\Models\TemplateSection','section_id','id');
	}
}
