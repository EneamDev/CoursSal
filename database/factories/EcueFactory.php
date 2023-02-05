<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 use App\Models\Ecue;
use App\Models\Ue;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ecue>
 */
class EcueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      /*  return [

            'nom' => fake()->title,
            'ue_id' => function () {
                return factory(Ue::class)->create()->id;
            },
        ];*/
    }
}



