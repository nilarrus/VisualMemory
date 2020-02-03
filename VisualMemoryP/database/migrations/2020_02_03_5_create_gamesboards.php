<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamesboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_game');
            $table->unsignedBigInteger('id_board');
            $table->foreign('id_game')->references('id')->on('games');
            $table->foreign('id_board')->references('id')->on('boards');
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
        Schema::dropIfExists('gamesboards');
    }
}
