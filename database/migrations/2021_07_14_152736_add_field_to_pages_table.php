<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
         $table->text('heading_2_jp')->nullable();
         $table->text('heading_2_pt')->nullable();
         $table->text('details_2_jap')->nullable();
         $table->text('details_2_pt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('heading_2_jp');
            $table->dropColumn('heading_2_pt');
            $table->dropColumn('details_2_jap');
            $table->dropColumn('details_2_pt');
        });


    }
}
