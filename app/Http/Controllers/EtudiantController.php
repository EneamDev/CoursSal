<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Programmations;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    //
    public function dashboard()
    {

        $filiere = Filiere::all();
      $salles = Salle::all();

        $salles_disponibles = DB::table('salles')
            ->join('filieres', 'salles.id', '=', 'filieres.salle_id')
            ->join('programmations', 'filieres.id', '=', 'programmations.filiere_id')
            ->select('salles.nom', 'filieres.nom as filiere_nom', 'programmations.*')
            ->distinct()
            ->get();


        $programmations =   Programmations::all();



        return view('utilisateurs.home', compact('salles','programmations', 'salles_disponibles'));


    }
}


