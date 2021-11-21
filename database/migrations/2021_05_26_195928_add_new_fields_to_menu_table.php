<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->longText('title_jp');
            $table->longText('text_jp');
            $table->string('status')->default(1);
            $table->integer('likes')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('title_jp');
            $table->dropColumn('text_jp');
            $table->dropColumn('status')->default(1);
            $table->dropColumn('likes')->default(1);
        });
    }
}
