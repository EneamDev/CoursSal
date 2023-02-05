<?php

namespace Database\Seeders;

use App\Models\Ue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        Ue::insert([
            ['nom' => 'Algebre',
            ],
            ['nom' => 'Economie',
            ],

        ]);
    }
}
