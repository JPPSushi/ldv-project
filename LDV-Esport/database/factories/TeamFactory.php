<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->words(15, true),
            'leader_id' => DB::table('users')->get('id')->random(1)->first()->id,
            'team_image' => "example.png",
        ];
    }
}
