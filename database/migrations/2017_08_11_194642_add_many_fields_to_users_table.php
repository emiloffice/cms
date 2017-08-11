<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddManyFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->rememberToken()->after('password')->nullable();
            $table->string('oauth_token')->after('password')->nullable();
            $table->string('oauth_types')->after('password')->nullable();
            $table->string('avatar')->after('password')->nullable();
            $table->string('avatar_original')->after('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('facebook_token');
            $table->dropColumn('twitter_token');
            $table->dropColumn('avatar');
            $table->dropColumn('avatar_original');
        });
    }
}
