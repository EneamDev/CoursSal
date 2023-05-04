@extends('layouts.utilisateurs.master')

@section('sous-contenu')
    <form action="" method="POST"
        class="border px-6 py-10 my-4 rounded-lg flex flex-col items-center content-center lg:w-[35%] mb-8 lg:mx-auto">

        <h2 class="text-lg font-bold">Trouver des salles disponibles</h2>

        <div class="flex">
            <div class="w-full my-2 mx-1">
                <label for="plage">Choisir la plage horaire</label>
                <input type="text" class="w-full mt-4 rounded-lg focus:border-[#28AD81] focus:border-[3px]"
                    placeholder="16h-19h" id="time" inputmode="borderchange()">
            </div>

            <div class="w-full my-2 mx-1">
                <label for="jour">Choisir le jour</label>

                <select name="statut" class="w-full mt-4 rounded-lg focus:border-[#28AD81] focus:border-[3px]"
                    id="jour">
                    <option value="l"selected>Lundi</option>
                    <option value="m" class="survol">Mardi</option>
                    <option value="me">Mercredi</option>
                    <option value="j">Jeudi</option>
                    <option value="v">Vendredi</option>
                </select>
            </div>
        </div>

        <input type="submit"
            class="w-full cursor-pointer rounded-lg uppercase border mt-2 flex justify-center items-center no-underline px-4 py-2 text-white font-bold bg-[#28AD81]"
            value="chercher">

    </form>

    <div class="m-4 overflow-scroll lg:w-[80%] mb-8 lg:mx-auto">
        <table class="w-full border-collapse">
            <tr class="">
                <th class=" text-xs border-[#28AD81] text-white rounded-tl-[.4rem] ">Salles</th>
                <th class=" text-xs border-[#28AD81] text-white">Capacité</th>
                <th class=" text-xs text-white border-[#28AD81]">Jour</th>
                <th class=" text-xs text-white border-[#28AD81] rounded-tr-[.4rem]">Heures</th>
            </tr>
            <tr>
                <td class="text-xs">Ireep</td>
                <td class="text-xs">50</td>
                <td class="text-xs text-black text-start">
                    Lundi <br>
                    Mardi<br>
                    Mercedi<br>
                    Jeudi <br>
                    Vendredi <br>
                </td>
                <td class="text-xs text-black text-start">
                    16h-18h <br>
                    16h-18h<br>
                    16h-18h<br>
                    16h-18h <br>
                    16h-18h <br>
                </td>
            </tr>
            <tr class="bg-gray-200">
                <td class="text-xs">Ireep</td>
                <td class="text-xs">50</td>
                <td class="text-xs text-black text-start">
                    Lundi <br>
                    Mardi<br>
                    Mercedi<br>
                    Jeudi <br>
                    Vendredi <br>
                </td>
                <td class="text-xs text-black text-start">
                    16h-18h <br>
                    16h-18h<br>
                    16h-18h<br>
                    16h-18h <br>
                    16h-18h <br>
                </td>
            </tr>
            <tr>
                <td class="text-xs">Ireep</td>
                <td class="text-xs">50</td>
                <td class="text-xs text-black text-start">
                    Lundi <br>
                    Mardi<br>
                    Mercedi<br>
                    Jeudi <br>
                    Vendredi <br>
                </td>
                <td class="text-xs text-black text-start">
                    16h-18h <br>
                    16h-18h<br>
                    16h-18h<br>
                    16h-18h <br>
                    16h-18h <br>
                </td>
            </tr>
            <tr class="bg-gray-200">
                <td class="text-xs">Ireep</td>
                <td class="text-xs">50</td>
                <td class="text-xs text-black text-start">
                    Lundi <br>
                    Mardi<br>
                    Mercedi<br>
                    Jeudi <br>
                    Vendredi <br>
                </td>
                <td class="text-xs text-black text-start">
                    16h-18h <br>
                    16h-18h<br>
                    16h-18h<br>
                    16h-18h <br>
                    16h-18h <br>
                </td>
            </tr>
        </table>
    </div>
@endsection
