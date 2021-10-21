<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->date('birth_date')->nullable();
            $table->string('address',255)->nullable();
            $table->string('number_phone',15)->nullable();
            $table->timestamps();
            //$table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
