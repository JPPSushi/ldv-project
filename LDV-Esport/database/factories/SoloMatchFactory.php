<?php

namespace Database\Factories;

use App\Models\SoloMatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoloMatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoloMatch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 months', $timezone = null),
            'player_a_score' => rand(0, 10),
            'player_b_score' => rand(0, 10),
            'status' => 2,
            'tournament_id' => DB::table('solo_tournaments')->get('id')->random(1)->first()->id,
        ];
    }
}
