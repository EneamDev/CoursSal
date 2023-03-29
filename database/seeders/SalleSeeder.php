<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("salles")->insert([
            [
                "nom" => "Ireep",
                "nbrePlace" => 50,
            ],
            [
                "nom" => "R1C",
                "nbrePlace" => 40,
            ],
            [
                "nom" => "R2C",
                "nbrePlace" => 40,
            ]
        ]);
    }
}
