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
            $table->string('sale')->nullable();
            $table->string('gift')->nullable();
            $table->string('departure_day');
            $table->string('receiving_address');
            $table->set('status', ['Ngừng', 'Hoạt Động'])->default('Hoạt Động');
            
            $table->string('amountofpeople')->nullable();
            $table->string('guide_team_code_manager');
            $table->set('status_tour', ['Chưa Khởi Hành', 'Đang Trải Nghiệm','Hoàn Thành']);
            
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
