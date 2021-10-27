<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('course_registers', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('course_duration_id');
            $table->unsignedInteger('course_learn_hour_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->time('start_time');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('course_registers');
    }
}
