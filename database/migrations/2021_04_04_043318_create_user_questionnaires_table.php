<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_questionnaires', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('schedule_id')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->text('blood_type');
            $table->enum('illness', ['Yes','No']);
//            $table->text('illness_details')->nullable();
            $table->datetime('disease_date')->nullable();
            $table->text('disease_name');
            $table->enum('treatment_status', ['Still under treatment', 'Completely cured']);
            $table->text('treatment_details')->nullable();
            $table->enum('chronic_disease', ['Yes', 'No']);
            $table->text('chronic_disease_details')->nullable();
            $table->enum('surgery', ['Yes', 'No'])->nullable();

            $table->text('surgery_details')->nullable();
            $table->enum('sequelae', ['Yes', 'No']);
            $table->text('sequelae_details')->nullable();
            $table->enum('illness_treated_status', ['Yes', 'No']);
            $table->text('illness_treated_status_details')->nullable();
            $table->enum('physical_disability', ['Yes', 'No']);
            $table->text('physical_disability_details')->nullable();
            $table->enum('weight_bearing', ['Yes', 'No']);
            $table->text('weight_bearing_details')->nullable();
            $table->enum('drugs', ['Yes', 'No']);
            $table->text('drugs_details')->nullable();
            $table->enum('serious_injured', ['Yes', 'No']);
            $table->text('serious_injured_details')->nullable();
            $table->enum('hearing_visual', ['Yes', 'No']);
            $table->text('hearing_visual_details')->nullable();
            $table->enum('allergic', ['Yes', 'No']);
            $table->text('allergic_details')->nullable();
            $table->enum('alcohol', ['Yes', 'No']);
            $table->text('alcohol_details')->nullable();

            $table->text('beverages')->nullable();
            $table->text('Tipo')->nullable();
            $table->text('copos')->nullable();
            $table->text('signature');




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
        Schema::dropIfExists('user_questionnaires');
    }
}

