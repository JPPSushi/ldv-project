@extends('layouts.base')

@section('main')

    <header class="w-full h-screen flex justify-center items-center">

        <div class="flex-col text-white mt-52">
            <h1 class="text-center font-bold text-6xl">{{ $name }}</h1>
            <p class="text-center mt-10 font-medium text-xl">Cette plateforme est dédiée aux tournois organisés par LDV Esport.</p>

            <button class="text-white mt-20 p-2 bg-pinkLDV w-40 rounded-2xl text-xl font-bold">SUIVANT</button>

            <img class="mt-36 cursor-pointer" src="/img/down-arrow.png" alt="Down arrow">
        </div>

    </header>

    <section class="flex flex-col ">

        {{-- Partie jeux --}}

        <div class="p-20 lg:px-36">
            <h2>Jeux en compétition</h2>
        </div>

        <div class="flex justify-around flex-wrap ml-10 md:ml-0 lg:px-28">
            @for($i = 0; $i < 5; $i++)
                <div class="w-10/12 lg:w-1/6 h-72 lg:h-80 relative my-4">
                    <img src="img/csgo.jpg" alt="logo CS:GO" class="h-full object-center object-cover rounded-lg">
                    <p class="absolute bottom-5 left-1/4 py-6 w-6/12 text-center rounded-lg bg-white text-blackLDV font-bold">CS:GO</p>
                </div>
            @endfor
        </div>

        <button class="py-2 px-8 bg-pinkLDV text-white uppercase font-bold text-h4 rounded-3xl self-center my-10">Voir tous les jeux en compétition</button>

    </section>

    <section class="flex flex-col">

        {{-- Partie tournois --}}

        <div class="p-20">
            <h2>Tournois</h2>
        </div>

        <div class="mt-8 md:mt-14">
            @for($i = 0; $i < 5; $i++)
                <section class="flex w-10/12 md:w-9/12 h-auto md:h-20 bg-white text-gray-800 rounded-lg md:rounded-full flex-col md:flex-row md:justify-between mx-auto my-10 md:my-4">
                    <img class="h-40 md:h-auto w-full md:w-80 object-cover object-top rounded-t-lg md:rounded-l-full" src="{{ asset('img/csgo.jpg')}}" alr="Counter-Strike:Global Offensive">
                    <div class="flex flex-col md:flex-row justify-around items-center w-full">
                        <h4 class="font-bold my-4 md:my-0">14aine Esport</h4>
                        <div class="text-center">
                            <p class="mb-2 md:mb-0">Counter-Strike:Global Offensive</p>
                            <p class="font-extralight">12 places restantes</p>
                        </div>
                        <p class="font-extralight mb-6 md:mb-0">17 Avril 2020</p>
                    </div>
                    <a href="#" class="rounded-b-lg md:rounded-r-full bg-pinkLDV w-full md:w-48 h-20 md:h-auto flex items-center justify-center uppercase text-white font-bold">Voir</a>
                </section>
            @endfor
        </div>

         <button class="py-2 px-8 bg-pinkLDV text-white uppercase font-bold text-h4 rounded-3xl self-center my-10">Voir tous les tournois en cours</button>
    </section>

    <style>

        nav {
            position: absolute;
        }

        header {
            background-image: url("/img/header-bg.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        header div button {
            margin-left: 40%;
        }
        header div img {
            margin-left: 47%;
        }
    </style>

@endsection
