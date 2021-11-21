<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAffiliateRulesToBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->string('affiliate_withdraw_day')->nullable();
            $table->string('affiliate_withdraw_person')->nullable();
            $table->string('affiliate_withdraw_deadline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->dropColumn('affiliate_withdraw_day');
            $table->dropColumn('affiliate_withdraw_person');
            $table->dropColumn('affiliate_withdraw_deadline');
        });
    }
}
