<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $connection = 'mysql_user';
    protected $fillable = [
        'user_id','guid', 'referral_code','from_referral_code', 'from_referral_id', 'points', 'points_level','fb_status', 'twitter_status','discord_status','group_status'
    ];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
