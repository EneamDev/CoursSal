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

    <div class="container col-lg-10 table-responsive mb-0">

        <h2 class="text_center mt-1" style="text-align: center;">Emploi du temps</h2>

        <table class="my_table mt-3 table table-bordered">
            <thead>
                <tr id="my_table_hd">
                    <th>

                        <div class="my_table_hd_elmt">Horaire</div>
                    </th>
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
                <tr>
                    <td>7h-8h</td>
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
                    </td>
                    <td rowspan="1"></td>
                </tr>

                <tr>

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

                </tr>

            </tbody>
        </table>
    </div>
@endsection
