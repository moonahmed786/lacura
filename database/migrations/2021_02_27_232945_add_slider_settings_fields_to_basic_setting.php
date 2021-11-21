<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSliderSettingsFieldsToBasicSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->integer('space_between_slids')->default(10)->nullable();
            $table->integer('slider_loop')->default(1)->nullable();
            $table->integer('autoplay_delay')->default(400)->nullable();
            $table->integer('slidesPerView')->default(2)->nullable();
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

            $table->dropColumn('space_between_slids');
            $table->dropColumn('slider_loop');
            $table->dropColumn('autoplay_delay');
            $table->dropColumn('slidesPerView');
        });
    }
}
