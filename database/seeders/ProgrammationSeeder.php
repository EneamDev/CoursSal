<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("programmations")->insert([
            [
                "mh_tp" => 10,
                "created_at" => now() ,
        "updated_at" =>now() 	,
        "mh_cm_td" => 50 ,
        "debut_cours" => now() ,
        "heure_debut" => 7 ,
        "horaire_jour" => 4 ,
        "enseignant_id" => 1 ,
        "filiere_id"=> 1  ,
        "user_id" => 2 ,
        "ue_id" =>1 ,
            ],
            [
                "mh_tp" => 10,
                "created_at" => now() ,
                "updated_at" =>now() 	,
                "mh_cm_td" => 50 ,
                "debut_cours" => now() ,
                "heure_debut" => 10 ,
                "horaire_jour" => 2 ,
                "enseignant_id" => 2 ,
                "filiere_id"=> 2  ,
                "user_id" => 3 ,
                "ue_id" =>2 ,
            ],
            [
                "mh_tp" => 10,
                "created_at" => now() ,
                "updated_at" =>now() 	,
                "mh_cm_td" => 50 ,
                "debut_cours" => now() ,
                "heure_debut" => 11 ,
                "horaire_jour" => 3 ,
                "enseignant_id" => 1 ,
                "filiere_id"=> 1  ,
                "user_id" => 2 ,
                "ue_id" =>2 ,
            ],
            [
                "mh_tp" => 10,
                "created_at" => now() ,
                "updated_at" =>now() 	,
                "mh_cm_td" => 50 ,
                "debut_cours" => now() ,
                "heure_debut" => 7 ,
                "horaire_jour" => 4 ,
                "enseignant_id" => 2 ,
                "filiere_id"=> 3  ,
                "user_id" => 1 ,
                "ue_id" => 3 ,
            ],
            [
                "mh_tp" => 10,
                "created_at" => now() ,
                "updated_at" =>now() 	,
                "mh_cm_td" => 30 ,
                "debut_cours" => now() ,
                "heure_debut" => 13 ,
                "horaire_jour" =>  4,
                "enseignant_id" => 2 ,
                "filiere_id"=> 4  ,
                "user_id" => 3 ,
                "ue_id" =>2 ,
            ],

        ]);
    }
}
