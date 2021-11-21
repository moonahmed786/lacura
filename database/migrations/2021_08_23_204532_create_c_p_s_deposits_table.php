<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCPSDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('CPS_deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('trans_id')->nullable();
            $table->string('coin_type')->nullable();
            $table->string('capital_type')->nullable();
            $table->string('detail')->nullable();
            $table->string('type')->nullable();
            $table->Float('amount');
            $table->string('payment_gateway')->nullable();
            $table->Float('btc_amo')->default(0);
            $table->string('btc_rate')->default(0);
            $table->string('btc_wallet')->default(0);
            $table->Float('usd_amo')->default(0);
            $table->integer('deposite_status')->default(0);
            $table->integer('withdraw_status')->default(0);
            $table->Float('charge')->default(0);

//            $table->foreign('user_id')->on('users')->references('id');


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
        Schema::dropIfExists('CPS_deposits');
    }
}
