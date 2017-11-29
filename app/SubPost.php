<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubPost extends Model
{
    public function up(){
        Schema::create('subpost',function (Blueprint $table){
            $table->increments('id');
            $table->string('content');
            $table->timestamps();
        });
    }
}
