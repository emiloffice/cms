<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];
    public function up(){
        Schema::create('posts', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->body('text');
            $table->timestamps();
        });
    }
    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }
}
