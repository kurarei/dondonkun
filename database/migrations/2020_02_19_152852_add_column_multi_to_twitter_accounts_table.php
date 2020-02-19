<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMultiToTwitterAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('twitter_accounts', function (Blueprint $table) {
            $table->boolean('following')->default(false)->comment('自動フォロー')->after('unfollow_range');
            $table->boolean('unfollowing')->default(false)->comment('自動アンフォロー')->after('following');
            $table->boolean('liking')->default(false)->comment('自動いいね')->after('unfollowing');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('twitter_accounts', function (Blueprint $table) {
            $table->dropColumn('liking');
            $table->dropColumn('unfollowing');
            $table->dropColumn('following');
        });
    }
}
