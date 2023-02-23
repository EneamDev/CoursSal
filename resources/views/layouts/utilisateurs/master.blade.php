@extends('layouts.master')

@section('content')
    <div class="w-screen h-screen">

        <div class="bg-[#969696] text-white h-[25px] text-[12px] flex items-center flex-wrap border justify-between">
            <div class="w-full md:w-[80%] pl-2 float-right mb-4">
                <marquee scrolldelay="1000" scrollamount="200px">
                    <b>
                        Nos Valeurs: L’esprit d’équipe et d’engagement - L’excellence - Le partenariat - La
                        reddition des
                        comptes
                    </b>
                </marquee>
            </div>
            <ul class="md:w-[20%] w-full float-right flex font-bold text-[15px] mb-4">
                <li class="px-4 border-r-2"><a href="" class="hover:text-white no-underline text-white">UAC</a></li>
                <li class="px-4 border-r-2"><a href="" class="hover:text-white no-underline text-white">Webmail</a>
                </li>
            </ul>
        </div>

        <!-- End Header -->


        <div class="flex md:flex-row flex-col items-center px-3 md:px-0 content-between">
            <div class="md:w-1/2 flex w-full items-center pl-0 md:pl-14">
                <img src="{{ asset('Images/téléchargement1.png') }}" class="h-[10%] md:h-[99px]" alt="">
            </div>
            <div class="md:w-1/2 flex w-full items-center justify-end">
                <img src="{{ asset('Images/uac4.png') }}" class="h-[10%] md:h-[99px] w-[50%] md:w-[80%]" alt="">
            </div>
        </div>

        <header class="flex h-[10%] items-center border-t-2 border-b-2 justify-between">
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
                                    <div class="tera border-b">
                                        <div class="   "><span
                                                class="text-[#263685] flex justify-end text-2xl lg:hidden cursor-pointer"><i
                                                    id="close-icons" class="fa-solid fa-close " onclick=""></i></span>
                                        </div>
                                    </div>

                                    <div class="tera-memb border-b my-2 pb-4">
                                        <h2 class=" text-center "><a href="{{ route('dashboard') }}"
                                                class="no-underline text-black hover:text-black"><i
                                                    class=" py-2 text-xl fa-solid fa-house-chimney opacity-60"></i>
                                                <p class="text-xs opacity-60">Accueil</p>
                                            </a> </h2>
                                    </div>
                                    <div class="portfolio my-2 border-b pb-4">
                                        <h2 class=" text-center">
                                            <a href="{{ route('recherche_emploi') }}" 
                                                class="no-underline text-black hover:text-black"><i
                                                    class=" py-2 text-xl fa-solid fa-calendar-days opacity-60"></i>
                                                <p class="text-xs opacity-60">Emploi du temps</p>
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                                <div class="second-block">
                                    <div class="tera-memb border-b my-2 pb-4">
                                        <h2 class=" text-center "><a href="{{ route('profile.edit') }}"
                                                class="no-underline text-black hover:text-black"><i
                                                    class="py-2 text-xl fa-solid fa-gear opacity-60 text-black"></i>
                                                <p class="text-xs opacity-60 ">Parametres</p>
                                            </a></h2>
                                    </div>
                                    <div class="portfolio my-2 pb-4">
                                        <h2 class=" text-center">
                                            <form action="{{ route('logout') }}" method="post">
                                                <button><i
                                                        class=" py-2 text-xl fa-solid fa-right-from-bracket opacity-60"></i>
                                                    <p class="text-xs opacity-60">Se deconnecter</p>
                                                </button>
                                            </form>
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
