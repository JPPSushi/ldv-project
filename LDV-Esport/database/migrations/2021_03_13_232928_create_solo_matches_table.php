<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoloMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solo_matches', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date')->nullable();
            $table->foreignId('player_a_id')->constrained('users')->cascadeOnUpdate();
            $table->foreignId('player_b_id')->constrained('users')->cascadeOnUpdate();
            $table->integer('player_a_score')->nullable();
            $table->integer('player_b_score')->nullable();
            $table->integer('status');
            $table->foreignId('tournament_id')->constrained('solo_tournaments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('round');
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
        Schema::dropIfExists('solo_matches');
    }
}
