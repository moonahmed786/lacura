<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('deposit_time')->nullable();
            $table->unsignedBigInteger('deposit_by_user');
            $table->string('type');
            $table->unsignedBigInteger('transactions_id')->nullable();
            $table->unsignedBigInteger('slot_id');
            $table->string('is_gift')->nullable();
            $table->unsignedBigInteger('gift_id')->nullable();
            $table->unsignedBigInteger('receiver_user_id');
            $table->Float('amount');
            $table->integer('status');
//          commission on amount ??
//            $table->foreign('deposit_by_user')->references('id')->on('users');
//            $table->foreign('slot_id')->on('slots')->references('id');
//            $table->foreign('transactions_id')->on('deposits')->references('id');
//            $table->foreign('gift_id')->references('id')->on('gifts');
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
        Schema::dropIfExists('slot_deposits');
    }
}
