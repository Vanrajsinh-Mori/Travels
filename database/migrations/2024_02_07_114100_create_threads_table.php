<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id('thread_id');
            $table->string('thread_title');
            $table->text('thread_desc');
            $table->unsignedBigInteger('thread_cat_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
