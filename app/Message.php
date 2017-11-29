<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id',
        'name',
        'organization',
        'email',
        'phone',
        'message',
        'created_at'

    ];
}
