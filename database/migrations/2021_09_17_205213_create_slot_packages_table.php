<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_pt_br');
            $table->string('title_ja');
            $table->integer('allowed_slots');
            $table->integer('withdraw_time');
            $table->string('status')->default(1);
            $table->float('amount');
            $table->integer('valid_for_days');
            $table->string('allowed_payment_type')->nullable();
            $table->string('allowed_withdraws_per_day')->nullable();


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
        Schema::dropIfExists('slot_packages');
    }
}
