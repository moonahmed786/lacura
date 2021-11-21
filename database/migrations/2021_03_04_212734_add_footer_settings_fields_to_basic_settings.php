<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFooterSettingsFieldsToBasicSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_settings', function (Blueprint $table) {
            $table->text('footer_jp')->nullable();
            $table->text('footer_message_p')->nullable();
            $table->text('footer_message_jp')->nullable();
            $table->text('footer_text_jp')->nullable();
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
            $table->dropColumn('footer_jp');
            $table->dropColumn('footer_message_p');
            $table->dropColumn('footer_message_jp');
            $table->dropColumn('footer_text_jp');
        });
    }
}
