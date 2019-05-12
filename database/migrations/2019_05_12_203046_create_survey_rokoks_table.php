<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyRokoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_rokoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis');
            $table->string('alasan');
            $table->string('merekBeli');
            $table->string('merekKompetitor');
            $table->string('merekTukar');
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
        Schema::dropIfExists('survey_rokoks');
    }
}
