<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeFieldsToTablePoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('points', function (Blueprint $table) {
            $table->smallInteger('fb_status')->after('points_level')->nullable()->default(0);
            $table->smallInteger('twitter_status')->after('points_level')->nullable()->default(0);
            $table->smallInteger('discord_status')->after('points_level')->nullable()->default(0);
            $table->smallInteger('group_status')->after('points_level')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('points', function (Blueprint $table) {
            $table->dropColumn('fb_status');
            $table->dropColumn('twitter_status');
            $table->dropColumn('discord_status');
            $table->dropColumn('group_status');
        });
    }
}
