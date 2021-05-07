<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tournament_id' => DB::table('solo_tournaments')->get('id')->random(1)->first()->id,
            'user_id' => DB::table('users')->get('id')->random(1)->first()->id
        ];
    }
}
