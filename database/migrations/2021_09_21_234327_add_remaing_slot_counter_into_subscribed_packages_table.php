<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemaingSlotCounterIntoSubscribedPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slot_package_subscribes', function (Blueprint $table) {
            $table->integer('reaming_slots');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slot_package_subscribes', function (Blueprint $table) {
            $table->dropColumn('reaming_slots');

        });
    }
}
