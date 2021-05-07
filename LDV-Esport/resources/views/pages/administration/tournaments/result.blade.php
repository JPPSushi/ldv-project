<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ __('Enregistrer un résultat') }}
        </h2>
    </x-slot>
    
    <x-slot name="slot">
        <div>
            <form class="flex flex-col items-center">
                <div class="w-10/12 text-center flex flex-col md:flex-row justify-around">
                    <div class="flex flex-col items-start">
                        <label for="team1" class="my-4 font-bold">Nom de l'équipe 1</label>
                        <select id="team1" class="text-gray-800 w-80 rounded-lg">
                            @for($i = 0; $i < 5; $i++)
                                <option class="text-gray-800">Nom</option>
                            @endfor
                        </select>
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="team2" class="my-4 font-bold">Nom de l'équipe 2</label>
                        <select id="team2" class="text-gray-800 w-80 rounded-lg">
                            @for($i = 0; $i < 5; $i++)
                                <option class="text-gray-800">Nom</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <p class="my-8 font-bold text-3xl">VS</p>
                <div class="w-10/12 text-center flex flex-col md:flex-row justify-around">
                    <div class="flex flex-col items-start">
                        <label for="score1" class="my-4 font-bold">Score de l'équipe 1</label>
                        <input id="score1" type="number" class="text-gray-800 w-80 rounded-lg">
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="score2" class="my-4 font-bold">Score de l'équipe 2</label>
                        <input id="score2" type="number" class="text-gray-800 w-80 rounded-lg">
                    </div>
                </div>
                <button type="submit" class="col-start-2 mt-20 mb-16 py-3 px-16 rounded-3xl bg-pinkLDV text-lg uppercase text-white font-bold">
                    Valider le résultat
                </button>
            </form>
        </div>
    </x-slot>
</x-app-layout>