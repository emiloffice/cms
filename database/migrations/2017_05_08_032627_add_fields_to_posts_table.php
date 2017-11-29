<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');//副标题
            $table->integer('system_cate_id')->nullable()->after('subtitle');//分类栏目
            $table->integer('posts_category')->nullable()->after('system_cate_id');//文章类型
            $table->integer('sort')->nullable()->after('posts_category');//文章类型
            $table->string('keyword')->nullable()->after('sort');//关键词
            $table->string('description')->nullable()->after('keyword');//文章摘要
            $table->string('author')->nullable()->after('description');//作者
            $table->integer('source')->nullable()->after('author');//文章来源
            $table->string('comment_cate')->nullable()->after('source');//是否允许评论
            $table->dateTime('comment_start_date')->nullable()->after('comment_cate');//评论开始时间
            $table->dateTime('comment_end_date')->nullable()->after('comment_start_date');//评论结束时间
            $table->integer('template_cate')->nullable()->after('comment_end_date');//模版选择
            $table->string('thumb')->nullable()->after('template_cate');//缩略图
            $table->string('status')->nullable()->after('thumb');//缩略图

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
