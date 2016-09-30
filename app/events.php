<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable =
        [
            'title', 'description', 'images', 'valid_from', 'valid_to', 'status', '',
        ];
}
