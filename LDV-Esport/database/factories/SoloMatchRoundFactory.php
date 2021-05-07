<?php

namespace Database\Factories;

use App\Models\SoloMatchRound;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class SoloMatchRoundFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoloMatchRound::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $player1 = DB::table('users')->get('id')->random(1)->first()->id;
        $player2 = DB::table('users')->get('id')->random(1)->first()->id;

        while ($player1 == $player2) {
            $player2 = DB::table('solo_tournaments')->get('id')->random(1)->first()->id;
        };


        $match_id = rand(1, DB::table('solo_matches')->count());

        // while(DB::table('solo_match_rounds')->where('match_id', '=', $match_id)->exists() == true) {
        //     $match_id++;
        // };

        return [
            'match_id' => $match_id,
            'player_a_id' => $player1,
            'player_b_id' => $player2,
        ];
    }
}
