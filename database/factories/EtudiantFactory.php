<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'matricule' => $this->faker->randomNumber(8),
            'nom' => fake()->name(),
            'prenoms' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'numero' => $this->faker->randomNumber(8),
            'dateNaissance' => $this->faker->dateTimeBetween('-30 years', 'now')->format('Y-m-d'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => 1,
            'filiere_id' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
