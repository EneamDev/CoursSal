@extends('layouts.master')

@section('content')
    <div class="card w-full h-full flex justify-center items-center mx-auto ">
        <div class="flex justify-center bg-gray-200 md:bg-white mx-auto items-center w-5/6 lg:w-2/3 h-full ">
            <div
                class="card-right md:rounded-xl flex mx-auto justify-center md:bg-gray-200 items-center w-11/12 md:w-3/5 h-3/5 md: p-8">
                <form action="" class=" px-2 ">
                    <p class=" text-[#28AD81] text-xl w-fit mx-auto font-bold">Authentification</p>
                    <span class="w-[8rem] mx-auto block h-[2px] bg-[#28AD81] "> </span>
                    <input type="text"
                        class=" my-6 py-2 rounded-3xl text-[#0c0265] focus:border-[#0c0265] font-bold px-8 w-full"
                        placeholder="Nom d'utilisateur">
                    <input type="password"
                        class=" mb-6 py-2 rounded-3xl text-[#0c0265] focus:border-[#0c0265] font-bold px-8 w-full"
                        placeholder="Mot de passe">
                    <button type="submit"
                        class="uppercase  flex mx-auto font-bold rounded-3xl bg-[#28AD81] text-white py-2 px-4 lg:px-8 ">se
                        connecter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
