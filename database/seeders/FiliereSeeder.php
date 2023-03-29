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
                "nom" => "Ireep",
                "effectif" => 50,
                "salle_id" => 1,
            ],
            [
                "nom" => "R1C",
                "effectif" => 50,
                "salle_id" => 1,
            ],
            [
                "nom" => "R2C",
                "effectif" => 50,
                "salle_id" => 2,
            ]
        ]);
    }
}
