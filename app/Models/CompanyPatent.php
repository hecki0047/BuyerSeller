<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPatent extends Model
{
    protected $table    ="patent";
    protected $fillable = ['company_id','patent_no','patent_name','patent_type','start_date','end_date','scope'];
}
