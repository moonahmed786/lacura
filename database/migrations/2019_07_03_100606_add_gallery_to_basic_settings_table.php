<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGalleryToBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->string('gallery_title')->nullable();
            $table->string('gallery_detail')->nullable();
            $table->string('gallery_show_method')->default('random');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->droptable('basic_settings');
            $table->dropColumn('gallery_detail');
            $table->dropColumn('gallery_show_method');
        });
    }
}
