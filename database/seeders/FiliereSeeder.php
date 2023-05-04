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
                "nom" => "IG1/A",
                "effectif" => 50,
                "salle_id" => 1,
            ],
            [
                "nom" => "PLAN2/A",
                "effectif" => 50,
                "salle_id" => 1,
            ],
            [
                "nom" => "GCO2/A",
                "effectif" => 50,
                "salle_id" => 2,
            ],
            [
                "nom" => "IG3/AIP",
                "effectif" => 50,
                "salle_id" => 3,
            ],
            [
                "nom" => "IG3/ARI",
                "effectif" => 30,
                "salle_id" => 2,
            ]
        ]);
    }
}
