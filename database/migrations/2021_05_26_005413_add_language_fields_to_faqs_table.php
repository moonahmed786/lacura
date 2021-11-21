<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguageFieldsToFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->longText('title_jp');
            $table->longText('description_jp');
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
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn('title_jp');
            $table->dropColumn('description_jp');
            $table->dropColumn('status');
            $table->dropColumn('likes');
        });
    }
}
