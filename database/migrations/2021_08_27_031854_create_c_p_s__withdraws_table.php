<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCPSWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CPS_withdraws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('slot_id')->nullable();

            //slot * per_slot =  amount
            $table->float('amount');
            $table->float('btc_rate');
            $table->string('coin_type');
            //hedge amount or gift code
            $table->string('type');
            $table->unsignedBigInteger('gift_id')->nullable();
            $table->tinyInteger('withdraw_status')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('withdraw_approved_time')->nullable();

//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('slot_id')->on('slots')->references('id');
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
        Schema::dropIfExists('CPS_withdraws');
    }
}
