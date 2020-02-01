<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->string('token')->comment('Twitter Token');
            $table->string('secret')->comment('Twitter Secret');
            $table->string('uid')->unique()->comment('Twitter uid');
            $table->string('name')->comment('Twitter Name');
            $table->string('nickname')->comment('Twitter Nickname');
            $table->string('email')->nullable()->comment('Twitter E-Mail');
            $table->string('avatar')->nullable()->comment('Twitter Avatar');
            $table->mediumText('user_json')->nullable()->comment('Twitter user json');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twitter_accounts');
    }
}
