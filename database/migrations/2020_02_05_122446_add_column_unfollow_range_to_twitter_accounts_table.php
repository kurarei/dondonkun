<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUnfollowRangeToTwitterAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('twitter_accounts', function (Blueprint $table) {
            $table->smallInteger('unfollow_range')->default(7)->unsined()->comment('自動アンフォロー期間')->after('user_json');
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
            $table->dropColumn('unfollow_range');
        });
    }
}
