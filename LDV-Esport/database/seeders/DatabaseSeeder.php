<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('teams')->truncate();
        DB::table('participants')->truncate();
        DB::table('team_bonds')->truncate();
        DB::table('solo_tournaments')->truncate();
        DB::table('solo_matches')->truncate();
        // DB::table('solo_match_rounds')->truncate();
        Schema::enableForeignKeyConstraints();

        \App\Models\User::factory(30)->create();
        \App\Models\Team::factory(10)->create();
        \App\Models\Game::factory(1)->create();
        \App\Models\SoloTournament::factory(1)->create();
        \App\Models\Participant::factory(16)->create();




        // \App\Models\SoloMatch::factory(20)->create();
        // \App\Models\SoloMatchRound::factory(20)->create();

    }
}
