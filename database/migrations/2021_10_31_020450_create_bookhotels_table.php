<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookhotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookhotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idroom');
            $table->unsignedBigInteger('idhotel');
            $table->unsignedBigInteger('iduser');
            $table->date('dateroom');
            $table->date('payday');
            $table->string('summoney');
            $table->date('registrationdate');

            $table->foreign('idroom')->references('id')->on('roomhotels');
            $table->foreign('idhotel')->references('id')->on('hotels');

            $table->foreign('iduser')->references('id')->on('users');
       

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
        Schema::dropIfExists('bookhotels');
    }
}
