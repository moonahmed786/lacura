<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToReferralCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('referral_commissions', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1)->comment('1 : on process, 0 : added to balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referral_commissions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
