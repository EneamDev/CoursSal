<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Enseignant;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UeSeeder::class);
        $this->call(EcueSeeder::class);
        $this->call(SalleSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(FiliereSeeder::class);
        $this->call(JoursSeeder::class);




        \App\Models\User::factory(10)->create();
        \App\Models\Etudiant::factory(5)->create();
        Enseignant::factory(5)->create();

        $this->call(ProgrammationSeeder::class);
        $this->call(JoursProgrammationsSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
