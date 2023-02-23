<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("filieres")->insert([
            [
                'nom' => 'IG',
                'effectif' => rand(25, 100),
                'salle_id' => rand(1, 2),
                'created_at' => now()
            ],
            [
                'nom' => 'Plan',
                'effectif' => rand(25, 100),
                'salle_id' => rand(1, 2),
                'created_at' => now()
            ],
            [
                'nom' => 'GCO',
                'effectif' => rand(25, 100),
                'salle_id' => rand(1, 2),
                'created_at' => now()
            ],
            
            ]);
    }
}
