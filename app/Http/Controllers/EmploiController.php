<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Jours;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("utilisateurs.emploi_du_temps.emploi");
    }

    /**
     * Search a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        $salles = Salle::all();
        $filieres = Filiere::all();
        return view("utilisateurs.emploi_du_temps.rechercher_emploi", compact('salles', 'filieres'));
    }

    public function research(Request $request)
    {
        $salles = Salle::all();
        $filieres = Filiere::all();
              $salle = $request->salle;
              $filiere = $request->filiere;
              $jours  = Jours::all();

        $researches = DB::table('salles')
            ->join('filieres', 'salles.id', '=', 'filieres.salle_id')
            ->join('programmations', 'filieres.id', '=', 'programmations.filiere_id')
            ->join('jours_programmations', 'programmations.id', '=', 'jours_programmations.programmation_id')
            ->join('jours', 'jours_programmations.jours_id', '=', 'jours.id')
            ->select('salles.nom', 'filieres.nom as filiere_nom', 'programmations.*', 'jours.jour as jour')
             ->where('salles.nom', 'LIKE', '%'.$salle.'%')
            ->where('filieres.nom', 'LIKE', '%'.$filiere.'%')
            ->distinct()
            ->get();

       // dd($researches);

        return view("utilisateurs.emploi_du_temps.rechercher_emploi", compact('researches', 'jours', 'salles','filieres'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
