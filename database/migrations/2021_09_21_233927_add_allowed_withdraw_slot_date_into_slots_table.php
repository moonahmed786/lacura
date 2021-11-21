<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAllowedWithdrawSlotDateIntoSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->dateTime('allowed_withdraw_at');
            $table->string('package_id');
            $table->dateTime('slot_validate_until');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slots', function (Blueprint $table) {
            $table->dropColumn('allowed_withdraw_at');
            $table->dropColumn('package_id ');
            $table->dropColumn('slot_validate_until');

        });
    }
}
