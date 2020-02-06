<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterTweetReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_tweet_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('twitter_account_id')->unsigned();
            $table->string('message', 140)->comment('メッセージ');
            $table->datetime('reservation_datetime')->comment('予約日時');
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
        Schema::dropIfExists('twitter_tweet_reservations');
    }
}
