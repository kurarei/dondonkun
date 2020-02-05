<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetTwitterFollowKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_twitter_follow_keywords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('twitter_account_id')->unsigned();
            $table->string('condition', 2)->comment('条件');
            $table->string('word', 100)->comment('キーワード');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('twitter_account_id')->references('id')->on('twitter_accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_twitter_follow_keywords');
    }
}
