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
        Schema::create('booked', function (Blueprint $table) {
            $table->id(); // Change to use Laravel's id() method
            $table->integer('quantity');
            $table->integer('price');
            $table->string('hotel_image_path'); // Change column name to 'hotel_image_path' for consistency
            $table->unsignedBigInteger('user_id'); // Change column name to 'user_id' for consistency
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booked');
    }
};
