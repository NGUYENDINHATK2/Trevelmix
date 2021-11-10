<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title');
            $table->longText('description');
            $table->longText('experience_tour');
            $table->longText('title_day_1');
            $table->longText('description_day_1');
            $table->longText('title_day_2')->nullable();
            $table->longText('description_day_2')->nullable();
            $table->longText('title_day_3')->nullable();
            $table->longText('description_day_3')->nullable();

            $table->longText('title_day_back')->nullable();
            $table->longText('description_day_back')->nullable();
            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
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
        Schema::dropIfExists('tour_details');
    }
}
