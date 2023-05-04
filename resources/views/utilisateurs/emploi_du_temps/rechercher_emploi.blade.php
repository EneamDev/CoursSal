@extends('layouts.utilisateurs.master')

@section('bootstrap-integration')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@endsection

@section('style')
    <style>
        select {
            border: solid #29AC80 !important;
            border-radius: 8px !important;
        }

        button {
            border-radius: 8px !important;
        }

        #my_table_hd {
            background-color: #29AC80;
            color: white;
        }

        .my_table {
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.30);
            ;
        }

        #btn_rechercher {
            background-color: #29AC80 !important;
            border: none;
        }

        .cours-1 {
            background-color: #4FA3E3 !important;

            padding: 2px !important;
        }

        .cours-2 {
            background-color: #BB4BA8 !important;

            padding: 2px !important;
        }

        .my_table_hd_elmt {
            width: 70px !important;
        }
    </style>
@endsection

@section('sous-contenu')
    <div class="row">
        <div class="container col-lg-6">
            <h2 class="text_center" style="text-align: center;">Emploi du temps</h2>

            <form action="{{route('research_emploi')}}" method="post">
                @csrf
                <label for="salle">Choisissez la salle</label>
                <select name="salle" id="salle" class="form-control mb-2">

                    @foreach($salles as $salle)
                    <option value="{{$salle->nom}}"> {{$salle->nom}} </option>
                    @endforeach
                </select>
                <label for="filiere">Choisissez la filière</label>
                <select name="filiere" id="filiere" class="form-control mb-2">
                    <option value="">IG1</option>
                    @foreach($filieres as $filiere)
                        <option value="{{$filiere->nom}}"> {{$filiere->nom}} </option>
                    @endforeach
                </select>
                <button id="btn_rechercher" type="submit" name="research" class="btn btn-success fo" style="margin-top: 10px;">
                    Rechercher</button>
            </form>
        </div>

        <div class="container col-lg-10 table-responsive  mb-0">


            <table class="my_table mt-5 table table-bordered">
                <thead>
                    <tr id="my_table_hd">
                       {{-- <th>

                            <div class="my_table_hd_elmt">Horaire</div>
                        </th>--}}
                        <th>
                            <div class="my_table_hd_elmt">Lundi</div>
                        </th>
                        <th>
                            <div class="my_table_hd_elmt">Mardi</div>
                        </th>
                        <th>
                            <div class="my_table_hd_elmt">Mercredi</div>
                        </th>
                        <th>
                            <div class="my_table_hd_elmt">Jeudi</div>
                        </th>
                        <th>
                            <div class="my_table_hd_elmt">Vendredi</div>
                        </th>

                    </tr>
                </thead>

                <tbody>
                @if (isset($researches))

                    @foreach($jours as $jour)
                        @foreach($researches as $research)
                            @if($research->jour == $jour->jour)
                    <tr>
                       {{-- <td>7h-8h</td>--}}
                        <td rowspan="3" class="cours-1" style="background-color: #4FA5E4;">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">
                                        {{$research->filiere_nom}}
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        {{$research->nom}}
                                        <p>Ue</p>
                                        {{$research->heure_debut}} - {{$research->heure_debut + $research->horaire_jour}}h
                                    </div>
                                </div>
                            </div>
                        </td>

                      {{--  <td rowspan="3" class="cours-1" style="background-color: #4FA5E4;">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="3" class="cours-1" style="background-color: #4FA5E4;">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="3" class="cours-1" style="background-color: #4FA5E4;">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>--}}
                        <td rowspan="1"></td>
                    </tr>
                    @endif

                    @endforeach

                    @endforeach

                  {{--  <tr>

                        <td>8h-9h</td>
                        <td rowspan="5" class="cours-2">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>9h-10h</td>

                    </tr>

                    <tr>
                        <td>10h-11h</td>

                    </tr>
                    <tr>
                        <td>11h-12h</td>

                    </tr>

                    <tr>
                        <td>12h-13h</td>
                        <td rowspan="3" class="cours-1">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td rowspan="3" class="cours-1">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="3" class="cours-1">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="3" class="cours-1">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>13h-14</td>

                    </tr>
                    <tr>
                        <td>14h-15h</td>

                    </tr>


                    <tr>
                        <td>15h-16h</td>

                        <td rowspan="4" class="cours-2">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="4" class="cours-2">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="2" class="cours-1">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td rowspan="4" class="cours-2">
                            <div class="container">
                                <div class="row rounded-5">
                                    <div class="row p-2 text-light m-0 fw-bold"
                                        style="background-color: whitesmoke; color: black !important;">

                                        IG3-ARI
                                    </div>
                                    <div class="row p-2 text-light m-0 fw-bold">
                                        Ireep
                                        Service réseaux
                                        7h-10h
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>16h-17h</td>

                    </tr>
                    <tr>
                        <td>17h-18h</td>

                    </tr>
                    <tr>
                        <td>18h-19h</td>

                    </tr>--}}

                </tbody>
            </table>



            @else
                <p class="text-center p-4" >Aucun emploi du temps</p>
                @endif
        </div>
    </div>
@endsection
