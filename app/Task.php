<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*public static function completed()
    {
        return static::where('completed', 1)->get();
    }
    public static function unCompleted()
    {
        return static::where('completed', 0)->get();
    }*/
    /*
     * laravel 范围查找
     * */
    public static function scopeCompleted($query)
    {
        return $query->where('completed', 1);
    }
    public static function scopeUnCompleted($query)
    {
        return $query->where('completed', 0);
    }
}
