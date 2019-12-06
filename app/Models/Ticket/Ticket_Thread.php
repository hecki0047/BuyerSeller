<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Model;

class Ticket_Thread extends Model
{
    protected $table = 'ticket_thread';
    protected $fillable = [
        'id', 'pid', 'ticket_id', 'staff_id', 'user_id', 'thread_type', 'poster', 'source', 'is_internal', 'title', 'body', 'format', 'ip_address', 'created_at', 'updated_at',
    ];

    public function attach()
    {
        return $this->hasMany('App\Model\Ticket\Ticket_attachments', 'thread_id');
    }

    public function delete()
    {
        $this->attach()->delete();
        parent::delete();
    }

//    public function setTitleAttribute($value) {
//        $this->attributes['title'] = str_replace('"', "'", $value);
//    }

     public function getTitleAttribute($value)
     {
         return str_replace('"', "'", $value);
     }
}
