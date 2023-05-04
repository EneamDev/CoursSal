<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("jours")->insert([
            [
                "jour" => "Lundi"
            ],
            [
                "jour" => "Mardi"
            ],
            [
                "jour" => "Mercredi"
            ],
            [
                "jour" => "Jeudi"
            ],
            [
                "jour" => "Vendredi"
            ],
            [
                "jour" => "Samedi"
            ],
        ]);
    }
}
