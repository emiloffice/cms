<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
