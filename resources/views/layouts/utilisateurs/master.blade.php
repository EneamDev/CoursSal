@extends('layouts.master')

@section('content')
    <div class="w-screen h-screen">

        <header class="flex h-[10%] items-center border-b-2 justify-between">
            <!-- Header -->

            <!-- Sub Header -->


            <div class=" w-1/4 flex ml-4 md:ml-0 items-center ">
                <i class="fa-solid fa-bars opacity-60 mx-4 text-xl"></i>
                <span class="text-[#28AD81] text-xl font-bold">COUR</span><span
                    class="opacity-60 text-xl font-bold">SAL</span>
            </div>
            <div class=" w-3/4 hidden md:flex justify-around ">
                <span class=""><i class=" py-2 text-xl mr-2 fa-solid fa-house-chimney opacity-60"></i>Accueil</span>
                <span><i class=" py-2 text-xl mr-2 fa-solid fa-calendar-days opacity-60"></i>Emploi du temps</span>
                <span class=""><i class=" py-2 text-xl mr-2 fa-solid fa-gear opacity-60"></i>Parametres</span>
                <span><i class=" py-2 text-xl mr-2 fa-solid fa-right-from-bracket opacity-60"></i>Se deconnecter</span>
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
                                        <h2 class=" text-center "><a href="{{ route('dashboard') }}"><i
                                                    class=" py-2 text-xl fa-solid fa-house-chimney opacity-60"></i>
                                                <p class="text-xs opacity-60">Accueil</p>
                                            </a> </h2>
                                    </div>
                                    <div class="portfolio my-2 border-b ">
                                        <h2 class=" text-center">
                                            <a href="{{ route('recherche_emploi') }}"><i
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
                                            <a href="#"><i
                                                    class=" py-2 text-xl fa-solid fa-right-from-bracket opacity-60"></i>
                                                <p class="text-xs opacity-60">Se deconnecter</p>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="section-card-right bg-white overflow-scroll lg:w-full ">

                        @yield('sous-contenu')

                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection
