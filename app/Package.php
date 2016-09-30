<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable =
        [
           'title', 'destiny', 'description', 'valid_from', 'user_id',
        ];
}
