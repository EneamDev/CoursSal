<?php

namespace Database\Factories;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'matricule' => $this->faker->randomNumber(8),
        'nom' => fake()->name(),
       'prenoms' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'numero' => $this->faker->randomNumber(8),
       'dateNaissance' => fake()->dateTime() ,
            'role_id' => 2,
            'filiere_id'=> 2,
            'remember_token' => Str::random(10),

        ];
    }
}
