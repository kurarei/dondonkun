<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetTwitterAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_twitter_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('twitter_account_id')->unsigned();
            $table->string('uid')->comment('Twitter uid');
            $table->string('name')->comment('Twitter Name');
            $table->string('nickname')->comment('Twitter Nickname');
            $table->string('avatar')->nullable()->comment('Twitter Avatar');
            $table->text('description')->nullable()->comment('Twitter Description');
            $table->mediumText('user_json')->nullable()->comment('Twitter user json');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('twitter_account_id')->references('id')->on('twitter_accounts')->onDelete('cascade');
            $table->unique(['twitter_account_id', 'uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_twitter_accounts');
    }
}
