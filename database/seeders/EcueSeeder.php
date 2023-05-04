<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("ecues")->insert([
            [
                "nom" => "Calcul matriciel",
                 "ue_id" => 1,
            ],
            [
                "nom" => "Macroéconomie",
                "ue_id" => 2,

            ],
            [
                "nom" => "Microéconomie",
                "ue_id" => 2,
            ],
            [
                "nom" => "Bureautique",
                "ue_id" => 4,


            ],
            [
                "nom" => "Algorithmique",
                "ue_id" => 5,


            ]
        ]);
    }
}
