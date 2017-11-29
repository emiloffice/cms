<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'id',
        'name',
        'permissions',
        'login_ip',
        'login_time',

    ];
}
