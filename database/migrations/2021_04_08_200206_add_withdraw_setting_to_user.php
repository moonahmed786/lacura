<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWithdrawSettingToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('payoneer_email')->nullable();
            $table->string('payoneer_username')->nullable();
            $table->string('stripe')->nullable();
            $table->string('stripe_email')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_IBN_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('branch_number')->nullable();
            $table->string('allow_withdraw')->default(1);

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
            $table->dropColumn('payoneer_email');
            $table->dropColumn('payoneer_username');
            $table->dropColumn('stripe');
            $table->dropColumn('stripe_email');
            $table->dropColumn('bank_account_number');
            $table->dropColumn('bank_name');
            $table->dropColumn('bank_IBN_number');
            $table->dropColumn('account_name');
            $table->dropColumn('account_type');
            $table->dropColumn('branch_number');
            $table->dropColumn('allow_withdraw');
        });
    }
}
