<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("ues")->insert([
            [
                "nom" => "Algebre",

            ],
            [
                "nom" => "Economie générale",

            ],
            [
                "nom" => "Economie nationale",

            ],
            [
                "nom" => "Bureautique",


            ],
            [
                "nom" => "Algorithmique",


            ]
        ]);
    }
}
