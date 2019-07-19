<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatewasteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platewaste', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable();
            $table->integer('hotel_id')->index();
            $table->integer('weight_kg')->unsigned();
            $table->index('people')->unsigned();
            $table->index('type')->unsigned()->index();
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
        Schema::dropIfExists('platewaste');
    }
}
