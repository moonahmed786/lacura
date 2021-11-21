<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_name');
            $table->string('alt_pt')->nullable();
            $table->string('alt_jp')->nullable();
            $table->string('lang')->default('ja');
            $table->string('temp')->nullable();
            $table->text('title_pt')->nullable();
            $table->text('title_jp')->nullable();
            $table->integer('batch_no')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('inst_sliders');
    }
}
