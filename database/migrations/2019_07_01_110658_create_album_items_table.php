<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_items', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('filetype')->comment('1 : Photo, 2: Video')->default(0);
            $table->string('filename');
            $table->string('rating')->default('0');
            $table->text('comment')->nullable();
            $table->morphs('uploader');
            $table->integer('album_id')->unsigned();
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
        Schema::dropIfExists('album_items');
    }
}
