<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Model;

class TicketToken extends Model
{
    protected $table = 'ticket_token';
    protected $fillable = [
        'id', 'ticket_id', 'token', 'created_at', 'updated_at',
    ];
}
