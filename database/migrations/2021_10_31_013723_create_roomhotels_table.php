<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomhotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomhotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_hotel');
            $table->string('numberroom');
            $table->string('price_adults');
            $table->string('price_children');
            $table->set('status',['yes','no']);
            $table->longText('description');
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
        Schema::dropIfExists('roomhotels');
    }
}
