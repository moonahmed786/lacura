<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->increments('id');
        $table->unsignedBigInteger('created_by');
        $table->float('amount');
        $table->unsignedBigInteger('used_by')->nullable();
        $table->unsignedBigInteger('pool_id')->nullable();
        $table->unsignedBigInteger('slot_id')->nullable();
        $table->longText('gift_code');
        $table->Float('btc_rate')->default(0);
        $table->unsignedBigInteger('source_slot_id')->nullable();
        $table->string('gift_type')->nullable();

        $table->tinyInteger('status')->default(0);
        $table->dateTime('approved_at')->nullable();

        $table->timestamps();


//            $table->foreign('used_by')->references('id')->on('users');
//            $table->foreign('created_by')->references('id')->on('users');
//            $table->foreign('slot_id')->references('id')->on('slots');
//            $table->foreign('pool_id')->references('id')->on('pools');
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifts');
    }
}
