<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ __('Liste des tournois') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="md:flex md:items-center md:justify-between mx-4 md:my-0 md:mr-16 mb-10">
            <div class="flex items-center justify-between md:justify-around">
                <p>Filtrer par :</p>
                <select class="bg-transparent border-0">
                    <option value="" class="bg-transparent">Jeux</option>
                    <option value="test1" class="text-black">Test1</option>
                    <option value="test2" class="text-black">Test2</option>
                </select>
                <select class="bg-transparent border-0">
                    <option value="" class="bg-transparent">Date</option>
                    <option value="test1" class="text-black">Test1</option>
                    <option value="test2" class="text-black">Test2</option>
                </select>
            </div>
            <div>
                <label>Loupe</label>
                <input type="text" placeholder="Rechercher ..." class="bg-transparent border-0 border-b-2 italic">
            </div>
        </div>

        <div class="mt-8 md:mt-14">
            @foreach ($tournois as $tourn)
                <section class="flex w-10/12 md:w-11/12 h-auto md:h-20 bg-white text-gray-800 rounded-lg md:rounded-full flex-col md:flex-row md:justify-between mx-auto my-10 md:my-4">
                    <img class="h-40 md:h-auto w-full md:w-80 object-cover object-top rounded-t-lg md:rounded-l-full" src="{{ asset('storage/game_thumbnails/'). '/' . $tourn->game->game_thumbnail}}" alr="Counter-Strike:Global Offensive">
                    <div class="flex flex-col md:flex-row justify-around items-center w-full">
                        <h4 class="font-bold my-4 md:my-0">{{$tourn->title}}</h4>
                        <div class="text-center">
                            <p class="mb-2 md:mb-0">{{$tourn->game->name}}</p>
                            <p class="font-extralight">{{$tourn->reg_players}} / {{$tourn->players}} participants</p>
                        </div>
                        <p class="font-extralight mb-6 md:mb-0">{{$tourn->date_start}}</p>
                    </div>

                    <a href="{{route('tournaments.show', $tourn->id)}}" class="rounded-b-lg md:rounded-r-full bg-pinkLDV w-full md:w-48 h-20 md:h-auto flex items-center justify-center uppercase text-white font-bold">Voir</a>

                </section>
            @endforeach
        </div>

        <div class="w-full text-center">
            <button class="uppercase text-pinkLDV font-bold leading-8">
                Défiler pour plus de tournois
                <hr>
                triangle
            </button>
        </div>
    </x-slot>

</x-app-layout>
