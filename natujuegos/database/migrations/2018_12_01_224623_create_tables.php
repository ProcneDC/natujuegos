<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';            
            $table->increments('id');
            $table->smallInteger('practique')->unsigned()->nullable();
            $table->smallInteger('mode')->unsigned()->nullable();
            $table->smallInteger('difficulty')->unsigned()->nullable();
            $table->smallInteger('winner_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('games_users', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->nullable();
            $table->smallInteger('game_id')->unsigned()->nullable();
            $table->integer('points')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('notifications', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->nullable();
            $table->smallInteger('game_id')->unsigned()->nullable();
            $table->smallInteger('sender_id')->unsigned()->nullable();
            $table->string('message', 100);           
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('users_notifications', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->nullable();
            $table->smallInteger('notification_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('active')->unsigned()->nullable();     
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('users_favorites', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->nullable();
            $table->smallInteger('favorites_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('stats', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('user_id')->unsigned()->nullable();
            $table->integer('points')->unsigned()->nullable();
            $table->integer('wins')->unsigned()->nullable();
            $table->integer('losses')->unsigned()->nullable();
            $table->integer('played')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cups', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('title', 100);           
            $table->string('description', 100);           
            $table->integer('xp')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cups_stats', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->smallInteger('cups_id')->unsigned()->nullable();
            $table->smallInteger('stats_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
        Schema::dropIfExists('games_users');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('users_notifications');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('users_favorites');
        Schema::dropIfExists('stats');
        Schema::dropIfExists('cups');
        Schema::dropIfExists('cups_stats');
    }
}
