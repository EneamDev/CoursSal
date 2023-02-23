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
        
        DB::table("salle")->insert([
            [
                'nom' => 'Ireep',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
                'nbrePlace' => 50,
            ],
            [
                'nom' => 'R1/C',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
                'nbrePlace' => 40,
            ],
            [
                'nom' => 'R2/C',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
                'nbrePlace' => 20,
            ],
            [
                'nom' => 'R1/A',
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
                'nbrePlace' => 52,
            ],
        ]);
        
    }
}
