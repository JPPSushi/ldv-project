<?php

namespace Database\Factories;

use App\Models\SoloTournament;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class SoloTournamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoloTournament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $array = [4, 8, 16, 32, 64];
        return [
            'title' => $this->faker->company,
            'description' => $this->faker->words(15, true),
            'game_id' => DB::table('games')->get('id')->random(1)->first()->id,
            'date_start' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 months', $timezone = null),
            'date_end' => $this->faker->dateTimeBetween($startDate = '+2 months', $endDate = '+4 months', $timezone = null),
            'players' => 16,
            // 'players' => Arr::random($array),
            'cashprize' => rand(0, 1000),
            'rules' => $this->faker->words(30, true),
            'links' => $this->faker->words(15, true),
            'image' => "example.png",
        ];
    }
}
