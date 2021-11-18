<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooktoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booktours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_book_tour');
        
            $table->integer('number_of_adults');
            $table->integer('number_of_children');
            $table->string('sum_money');
     
            $table->string('date_book');
            // $table->string('date_start');
            $table->set('thanhtoan',['yes','no']);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tour_id');
            // $table->unsignedBigInteger('staff1_id');
            // $table->unsignedBigInteger('staff2_id');
         
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tour_id')->references('id')->on('tours');
      
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
        Schema::dropIfExists('booktours');
    }
}
