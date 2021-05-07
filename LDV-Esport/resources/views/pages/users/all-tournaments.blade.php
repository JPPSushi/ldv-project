@extends('layouts.base')

@section('main')
    <main class="px-40">
        <h2>Tournois</h2>
        <div class="md:flex md:items-center md:justify-between mx-4 md:my-0 md:mr-16 mb-10 h-1/5 w-full">
            <div class="flex items-center justify-between md:justify-around w-full h-full">
                
                <div class="flex justify-center w-10/12 lg:w-1/6 h-72 lg:h-80 relative my-4">
                    <img src="img/csgo.jpg" alt="logo CS:GO" class="h-full object-center object-cover rounded-lg">
                    <button class="absolute bottom-5 p-3.5 text-center rounded-lg bg-white text-blackLDV font-bold rounded-3xl">COUNTER STRIKE: GLOBAL OFFENSIVE</button>
                </div>

                <div class="flex justify-center w-10/12 lg:w-1/6 h-72 lg:h-80 relative my-4">
                    <img src="img/csgo.jpg" alt="logo CS:GO" class="h-full object-center object-cover rounded-lg">
                    <button class="absolute bottom-5 p-3.5 text-center rounded-lg bg-white text-blackLDV font-bold rounded-3xl">COUNTER STRIKE: GLOBAL OFFENSIVE</button>
                </div>

                <div class="flex justify-center w-10/12 lg:w-1/6 h-72 lg:h-80 relative my-4">
                    <img src="img/csgo.jpg" alt="logo CS:GO" class="h-full object-center object-cover rounded-lg">
                    <button class="absolute bottom-5 p-3.5 text-center rounded-lg bg-white text-blackLDV font-bold rounded-3xl">COUNTER STRIKE: GLOBAL OFFENSIVE</button>
                </div>

                <div class="flex justify-center w-10/12 lg:w-1/6 h-72 lg:h-80 relative my-4">
                    <img src="img/csgo.jpg" alt="logo CS:GO" class="h-full object-center object-cover rounded-lg">
                    <button class="absolute bottom-5 p-3.5 text-center rounded-lg bg-white text-blackLDV font-bold rounded-3xl">COUNTER STRIKE: GLOBAL OFFENSIVE</button>
                </div>

                
                
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
                            <p class="font-extralight">xx places restantes</p>
                        </div>
                        <p class="font-extralight mb-6 md:mb-0">{{$tourn->date_start}}</p>
                    </div>

                    @if ($date < $tourn->date_start)

                    <a href="#" class="rounded-b-lg md:rounded-r-full bg-pinkLDV w-full md:w-48 h-20 md:h-auto flex items-center justify-center uppercase text-white font-bold">S'inscrire</a>

                    @elseif ($date > $tourn->date_start && $date < $tourn->date_end)

                    <a href="#" class="rounded-b-lg md:rounded-r-full bg-pinkLDV w-full md:w-48 h-20 md:h-auto flex items-center justify-center uppercase text-white font-bold">En cours</a>

                    @elseif ($date > $tourn->date_end)

                    <a href="#" class="rounded-b-lg md:rounded-r-full bg-pinkLDV w-full md:w-48 h-20 md:h-auto flex items-center justify-center uppercase text-white font-bold">Terminé</a>

                    @endif
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
    </main>
@endsection
