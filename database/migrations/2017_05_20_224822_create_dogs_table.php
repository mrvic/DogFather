<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // file:///C:/Users/SkyLucy/Code/Bone/docs/geobreeder.pdf
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('microchip_no');
            $table->integer('geobreeder_no');
            $table->text('nickname');
            $table->text('official_name');
            $table->text('breed');
            $table->date('dob');
            $table->enum('gender', ['m','f']);
            $table->text('color');
            $table->text('hair');
            $table->text('size');
            $table->text('distinguishing_markings');
            $table->enum('type', ['puppy','dog']);
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
        Schema::dropIfExists('dogs');
    }
}
