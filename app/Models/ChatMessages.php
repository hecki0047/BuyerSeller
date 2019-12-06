<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
   protected $table = 'chat_messages';
	protected $fillable = ['chat_id','message','attachment','sender_id','receiver_id','view','sender_view','receiver_view','active'];
	
	public function chat_sender_user()
    {
        return $this->hasOne('App\Models\Users','id','sender_id');
    }
    public function chat_receiver_user()
    {
        return $this->hasOne('App\Models\Users','id','receiver_id');
    }

}
