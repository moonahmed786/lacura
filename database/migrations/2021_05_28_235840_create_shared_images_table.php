<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharedImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shared_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('image_id');
            $table->string('image_type');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('last_shared');
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
        Schema::dropIfExists('shared_images');
    }
}
