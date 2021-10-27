<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDurationsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('course_durations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name',255);
            $table->text('description')->nullable();
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('course_durations');
    }
}
