<?php

namespace Database\Factories;

use App\Models\Filiere;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

/*
                        'nom' => fake()->name(),
                        'email' => fake()->unique()->safeEmail(),
                        'email_verified_at' => now(),
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                        'remember_token' => Str::random(10),
                        'role_id' => function () {
                                return factory(Role::class)->create()->id;
                            },
                        'filiere_id' => function () {
                                        return factory(Filiere::class)->create()->id;
                                    },*/




        ];
    }
}
