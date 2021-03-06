<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration 
{
	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->text('body');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('news');
	}
}
