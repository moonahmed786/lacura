<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoToBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->string('ja_seo_desc')->nullable();
            $table->string('ja_seo_key')->nullable();
            $table->string('ptbr_seo_desc')->nullable();
            $table->string('ptbr_seo_key')->nullable();
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
            $table->dropColumn('ja_seo_desc');
            $table->dropColumn('ja_seo_key');
            $table->dropColumn('ptbr_seo_desc');
            $table->dropColumn('ptbr_seo_key');
        });
    }
}
