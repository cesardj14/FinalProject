<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =
        [
            'title', 'description', 'images', 'valid_from', 'valid_to', 'nro_tickets',/* 'status',*/ 'user_id',
        ];
}
