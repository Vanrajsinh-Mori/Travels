<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('hotel_id');
            $table->unsignedBigInteger('city_id');
            $table->string('hotels_name');
            $table->integer('hotels_price');
            $table->text('hotels_description');
            $table->string('hotels_image_path');
            $table->timestamps();

            $table->foreign('city_id')->references('city_id')->on('citys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
