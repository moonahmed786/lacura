<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idx')->comment('page identifier index');
            $table->text('ja')->nullable();
            $table->text('pt')->nullable();
            $table->text('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('descriptions_pt')->nullable();
            $table->text('title_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('header_text')->nullable();

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
        Schema::dropIfExists('pages');
    }
}
