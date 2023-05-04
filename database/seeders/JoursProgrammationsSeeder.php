<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoursProgrammationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("jours_programmations")->insert([
            [
                "programmation_id" => 1,
                "jours_id" => 1,
            ],
            [
                "programmation_id" => 2,
                "jours_id" => 1,
            ],
            [
                "programmation_id" => 3,
                "jours_id" => 2,
            ],
            [
                "programmation_id" => 3,
                "jours_id" => 3,
            ],
            [
                "programmation_id" => 4,
                "jours_id" => 2,
            ],

        ]);
    }
}
