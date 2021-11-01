<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgroomhotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgroomhotels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('img6');    
            $table->string('img7');
            $table->string('img8');
            $table->string('img9');
            $table->string('img10');
            $table->unsignedBigInteger('id_img_roomhotel');
            // $table->unsignedBigInteger('id_img_hotel');

            $table->foreign('id_img_roomhotel')->references('id')->on('roomhotels');
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
        Schema::dropIfExists('imgroomhotels');
    }
}
