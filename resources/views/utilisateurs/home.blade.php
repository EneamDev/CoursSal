@extends('layouts.utilisateurs.master')

{{--
@section('bootstrap-integration')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@endsection  --}}

@section('sous-contenu')
    <header>
        <div id="info-card" class="mx-auto w-full flex my-6 bg-gray-200 ">
            <div class="info-content h-full w-full md:flex md:justify-around md:items-center  ">
                <div class="info-content-left flex flex-col md:w-[60%] md:ml-8 justify-start items-start">
                    <div
                        class="border-t-[2px] rounded-t-md rounded-b-md md:border-l-[6px] md:border-l-[#28AD81] md:border-t-[0px] md:my-8 px-2 w-full flex flex-col">
                        <p class="opacity-60 font-bold text-xl ">Bienvenue sur </p>
                        <p class="tracking-[.1rem]"> <span class="text-[#28AD81] text-2xl font-bold">COUR</span><span
                                class="opacity-60 text-2xl font-bold">SAL</span></p>
                        <p class="text-[.8rem] w-1/2 mt-4 mx-auto md:w-full font-bold opacity-60 ">
                            Gerons mieux nos salles et nos cours à ENEAM</p>
                    </div>
                    <a href="{{ route('emploi') }}"
                        class="border mt-2 flex justify-center items-center no-underline rounded-[.6rem] px-4 py-1 text-white font-bold bg-[#28AD81]">Consultez
                        l'emploi du temps de la semaine
                </a>
                </div>

                <div class="flex justify-end w-[40%] items-end h-full">
                    <div class="flex justify-end w-full items-end">
                        <div class=" picture flex h-full justify-end items-end  "><img
                                src="{{ asset('Images/etudiant.png') }}" class="w-full flex h-full justify-end items-end "
                                alt="">
                        </div>

                    </div>

                </div>

    </header>

    <p
        class="border-b-2 w-fit border-b-[#28AD81] flex mx-auto justify-center items-center px-2 uppercase text-center opacity-60 mt-4 font-bold">
        Les salles disponibles
    </p>

    <div class=" m-4 overflow-scroll lg:w-[80%] mb-8 lg:mx-auto ">
        <table class="w-full border-collapse">
            <tr class="">
                <th class=" text-xs border-[#28AD81] text-white rounded-tl-[.4rem] ">Salles</th>
                <th class=" text-xs border-[#28AD81] text-white">Heure d'occupation</th>
                <th class=" text-xs text-white border-[#28AD81] rounded-tr-[.4rem]">Filières</th>
            </tr>


         @foreach($salles_disponibles as $salle)
            <tr>
                <td class="text-xs">{{$salle->nom}}</td>
                <td class="text-xs">{{$salle->heure_debut}}h - {{$salle->heure_debut + $salle->horaire_jour}}h</td>
                <td class="text-xs text-black">{{$salle->filiere_nom}}</i></td>
            </tr>
@endforeach






        </table>



    </div>





@endsection
