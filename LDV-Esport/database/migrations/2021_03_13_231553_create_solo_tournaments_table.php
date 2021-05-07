<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoloTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solo_tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('game_id')->constrained('games')->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->integer('players');
            $table->integer('cashprize')->nullable();
            $table->text('rules');
            $table->text('links');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('solo_tournaments');
    }
}
