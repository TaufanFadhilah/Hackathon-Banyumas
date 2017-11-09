<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SurveyCompetitors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_competitors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->integer('type')->default(1);
            $table->integer('job_vacancy')->nullable();
            $table->integer('data_security')->nullable();
            $table->integer('editing')->nullable();
            $table->integer('cs')->nullable();
            $table->integer('price')->nullable();
            $table->integer('location')->nullable();

            $table->foreign('survey_id')->references('id')->on('surveys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_competitors');
    }
}
