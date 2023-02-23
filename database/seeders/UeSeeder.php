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
        DB::table("ues")->insert([
            [
                'nom' => 'Java',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ],
            [
                'nom' => 'Android',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ],
            [
                'nom' => 'Comptabilité générale',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ],
            [
                'nom' => 'Mathématiques générales',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ],
        ]);
    }
}
