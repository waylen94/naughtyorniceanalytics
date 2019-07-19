<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration 
{
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->integer('star')->unsigned();
            $table->integer('room_number')->unsigned();
            $table->string('description')->nullable();
            $table->string('location')->index();
            $table->integer('user_id')->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('hotels');
	}
}
