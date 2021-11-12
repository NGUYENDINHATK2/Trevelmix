<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tour_code');
            $table->string('name_tour');
            $table->string('time_tour');
            $table->string('price_adults');
            $table->string('price_children');
            $table->string('sale')->default('0%')->nullable();
            $table->string('gift')->default('no')->nullable();
            $table->string('departure_day');
            $table->string('receiving_address');
            $table->set('status', ['Ngừng', 'Hoạt Động'])->default('Hoạt Động');
            $table->string('amountofpeople')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
