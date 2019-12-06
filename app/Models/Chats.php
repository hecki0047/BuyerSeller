<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $table = 'chats';
	protected $fillable = ['sender_id','receiver_id','is_active'];

	public function chat_messages()
	{
		return $this->hasMany('App\Models\ChatMessages','chat_id','id');
	}
	public function chat_sender_user()
    {
        return $this->hasOne('App\Models\Users','id','sender_id');
    }
    public function chat_receiver_user()
    {
        return $this->hasOne('App\Models\Users','id','receiver_id');
    }

}
