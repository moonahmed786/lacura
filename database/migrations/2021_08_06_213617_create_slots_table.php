<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('deposits_id')->nullable();
            $table->string('slot_number')->nullable();
            $table->text('question')->nullable();
            $table->text('ans')->nullable();
            $table->float('balance')->nullable();
            $table->float('profit')->nullable();
            $table->integer('status')->nullable();

            $table->timestamps();

//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('deposits_id')->on('deposits')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slots');
    }
}
