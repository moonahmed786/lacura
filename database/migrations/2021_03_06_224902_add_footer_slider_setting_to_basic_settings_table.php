<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFooterSliderSettingToBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->text('in_slider_text')->nullable();
            $table->text('in_slider_textpt')->nullable();
            $table->integer('in_slider_speed')->default(800)->nullable();
            $table->integer('in_slider_loop')->default(1)->nullable();
            $table->integer('in_autoplay_delay')->default(500)->nullable();
            $table->integer('in_slidesPerView')->default(1)->nullable();
            $table->integer('footer_slider_enable')->default(1)->nullable();
            $table->integer('mission_enable')->default(1)->nullable();
            $table->integer('in_slider_number')->default(5)->nullable();
            $table->string('in_slider_show_method')->default('random')->nullable();
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
            $table->dropColumn('in_slider_text');
            $table->dropColumn('in_slider_textpt');
            $table->dropColumn('in_slider_speed');
            $table->dropColumn('in_slider_loop');
            $table->dropColumn('in_autoplay_delay');
            $table->dropColumn('in_slidesPerView');
            $table->dropColumn('footer_slider_enable');
            $table->dropColumn('mission_enable');
            $table->dropColumn('in_slider_number');
            $table->dropColumn('in_slider_show_method');

        });
    }
}
