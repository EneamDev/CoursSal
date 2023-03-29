@extends('layouts.master')

@section('content')
    <div class="w-screen h-screen">

        <header class="h-[10%] items-center border-b-2 justify-between">
            <!-- Header -->

            <!-- Sub Header -->


            <div class=" w-1/4 flex ml-4 md:ml-0 items-center ">
                <i class="fa-solid fa-bars opacity-60 mx-4 text-xl"></i>
                <span class="text-[#28AD81] text-xl font-bold">COUR</span><span class="opacity-60 text-xl font-bold">SAL</span>
            </div>
            <div class=" w-3/4 hidden md:flex justify-around ">
                <span class=""><i class=" py-2 text-xl mr-2 fa-solid fa-house-chimney opacity-60"></i>Accueil</span>
                <span><i class=" py-2 text-xl mr-2 fa-solid fa-calendar-days opacity-60"></i>Emploi du temps</span>
                <span class=""><i class=" py-2 text-xl mr-2 fa-solid fa-gear opacity-60"></i>Parametres

                </span>

                <span><i class=" py-2 text-xl mr-2 fa-solid fa-right-from-bracket opacity-60"></i>
                {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Se deconnecter') }}
                            </x-dropdown-link>
                        </form>--}}
                </span>
            </div>
        </header>

        <div class="card w-screen h-[88%] flex justify-center items-center">
            <div class="card-content w-full relative flex flex-col h-full justify-center items-center">
                <div id="section-card" class=" bg-gray-200 flex w-full my-8 mx-auto h-full">
                    <div id="side-bar"
                        class=" absolute z-40 w-4/5 bottom-0 top-0 left-0 bg-white shadow-[12rem_0rem_rgba(0,0,0,0.7)] lg:shadow-none lg:static lg:z-0 lg:w-[6%] lg:h-full border-b lg:border-r lg:border-b-0">
                        <div class="flex w-full h-full flex-col justify-between items-between">
                            <div class="flex h-full w-full justify-between items-between flex-col">
                                <div class="first-block">
                                    <div class="tera border-b ">
                                        <div class="   "><span
                                                class="text-[#263685] flex justify-end text-2xl lg:hidden cursor-pointer"><i
                                                    id="close-icons" class="fa-solid fa-close " onclick=""></i></span>
                                        </div>
                                    </div>

                                    <div class="tera-memb border-b my-2">
                                        <h2 class=" text-center "><a href="#"><i
                                                    class=" py-2 text-xl fa-solid fa-house-chimney opacity-60"></i>
                                                <p class="text-xs opacity-60">Accueil</p>
                                            </a> </h2>
                                    </div>
                                    <div class="portfolio my-2 border-b ">
                                        <h2 class=" text-center">
                                            <a href="#"><i
                                                    class=" py-2 text-xl fa-solid fa-calendar-days opacity-60"></i>
                                                <p class="text-xs opacity-60">Emploi du temps</p>
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                                <div class="second-block">
                                    <div class="tera-memb border-b my-2 ">
                                        <h2 class=" text-center "><a href="#"><i
                                                    class=" py-2 text-xl fa-solid fa-gear opacity-60"></i>
                                                <p class="text-xs opacity-60 ">Parametres</p>
                                            </a> </h2>
                                    </div>
                                    <div class="portfolio my-2 ">
                                        <h2 class=" text-center">
                                            @if(Auth::guard('etudiant')->check())
                                           {{-- <a href="{{ route('etudiant.logout') }}"><i
                                                    class=" py-2 text-xl fa-solid fa-right-from-bracket opacity-60"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></i>
                                                <p class="text-xs opacity-60">Se deconnecter</p>
                                            </a>
                                                <form id="logout-form" method="post" action="{{ route('etudiant.logout') }}">
                                                    @csrf

                                                </form>--}}
                                                <a  href="{{ route('etudiant.logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Déconnexion') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('etudiant.logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            @else

                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Déconnexion') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="section-card-right bg-white overflow-scroll lg:w-full ">
                        <div id="info-card" class=" mx-auto w-full flex my-8 bg-gray-200 ">
                            <div class="info-content h-full w-full md:flex md:justify-around md:items-center  ">
                                <div class="info-content-left flex flex-col md:w-[60%] md:ml-8 justify-start items-start">
                                    <div
                                        class="border-t-[2px] md:border-l-[6px] md:border-l-[#28AD81] md:border-t-[0px] md:my-8 px-2 w-full flex flex-col">
                                        <p class="opacity-60 font-bold text-xl ">Bienvenue sur </p>
                                        <p class="tracking-[.1rem]"> <span
                                                class="text-[#28AD81] text-2xl font-bold">COUR</span><span
                                                class="opacity-60 text-2xl font-bold">SAL</span></p>
                                        <p class="text-[.8rem] w-1/2 mt-4 mx-auto md:w-full font-bold opacity-60 ">
                                            Gerons mieux nos salles et nos cours à ENEAM</p>
                                    </div>
                                    <button
                                        class=" border mt-2 flex justify-center items-center rounded-[.6rem] px-4 py-1 text-white font-bold bg-[#28AD81] ">Consultez
                                        l'emploi du temps de la semaine
                                    </button>
                                </div>

                                <div class="flex justify-end w-[40%] items-end h-full">
                                    <div class="flex justify-end w-full items-end">
                                        <div class=" picture flex h-full justify-end items-end  "><img
                                                src="{{ asset('Images/etudiant.png') }}"
                                                class="w-full flex h-full justify-end items-end " alt="">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <p
                            class="border-b-2 w-fit border-b-[#28AD81] flex mx-auto justify-center items-center px-2 uppercase text-center opacity-60 mt-4 font-bold">
                            Les salles disponibles
                        </p>

                        <div class=" m-4 overflow-scroll lg:w-[80%] mb-8 lg:mx-auto ">
                            <table class="w-full border-collapse ">
                                <tr class="">
                                    <th class=" text-xs border-[#28AD81] text-white rounded-tl-[.4rem] ">Salles</th>
                                    <th class=" text-xs border-[#28AD81] text-white">Heure d'occupation</th>
                                    <th class=" text-xs text-white border-[#28AD81] rounded-tr-[.4rem]">Filières</th>
                                </tr>
                                <tr>
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr>
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr>
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr>
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-xs">Ireep</td>
                                    <td class="text-xs">14h</td>
                                    <td class="text-xs text-black">IG3-AIP</i></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection
