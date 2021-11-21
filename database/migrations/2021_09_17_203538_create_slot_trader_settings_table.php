<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotTraderSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_trader_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('minimum_active_slots')->nullable();
            $table->string('withdrawal_allowed')->nullable();
            $table->string('deadline_day')->nullable();
            $table->string('allowed_slots_activations')->nullable();
            $table->string('active_references')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slot_trader_settings');
    }
}
