<?php

namespace App\Http\Controllers;

use App\Models\Programmation;
use Illuminate\Http\Request;

class ProgrammationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("utilisateurs.programmations.editer");
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
     * @param  \App\Models\Programmation  $programmation
     * @return \Illuminate\Http\Response
     */
    public function show(Programmation $programmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programmation  $programmation
     * @return \Illuminate\Http\Response
     */
    public function edit(Programmation $programmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programmation  $programmation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programmation $programmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programmation  $programmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programmation $programmation)
    {
        //
    }
}
