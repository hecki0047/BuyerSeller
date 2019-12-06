<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherThemeDescription extends Model
{
     protected $table = 'voucher_theme_description';
	protected $guarded = array('created_at', 'updated_at');

	public function bdtdcVoucherTheme(){

	return $this->belongsTo('App\Models\VoucherTheme','voucher_theme_id');
}
public function bdtdcLanguage(){
		return $this->belongsTo('App\Models\Language', 'language_id');

	}


}
