@extends('layouts.base')

@section('main')
    <div>
        <img src="{{ asset("img/csgo.jpg")}}" alt="" class="absolute object-cover object-top w-full h-64 lg:h-52">
    </div>
    <main class="relative px-6 sm:px-40">
        <section class="mb-10">
            <h2 class="mb-3 sm:mb-8">Tournoi Counter-Strike : Global Offensive : 14aineEsport</h2>
            <p class="mb-2">Du 17/04/2021 au 26/04/2021</p>
            <p class="mb-2">16 équipes</p>
            <p>500€ de cashprize</p>
            <img src="" alt="Logo de l'événement">
        </section>
        {{-- End of the header page --}}

        <div class="flex justify-center">
            <p class="mb-16 px-8 py-2 bg-pinkLDV text-white font-bold uppercase rounded-full">0 place restante</p>
        </div>

        <div class="block sm:flex">
            <section class="mb-10 sm:w-1/2">
                <h3 class="mb-3 sm:mb-8">Description</h3>
                <p class="sm:w-10/12">Tournoi CS:GO (PC) de la 14aine Esport. Il est ouvert à tous le monde (16ans et +).
                    Attention, si vous avez entre 16 et 18ans, nous vous demanderons de fournir une
                    autorisation signée par vos parents.</p>
            </section>
            {{-- End of the description --}}

            <section class="mb-10 sm:w-1/2">
                <h3 class="mb-6 sm:mb-8">Structure</h3>
                <div class="mb-8 sm:w-9/12 flex flex-col sm:flex-row sm:justify-between bg-white text-blackLDV rounded-lg sm:rounded-full sm:pl-4 sm:mb-4">
                    <span class="text-center font-bold mt-4">Phase 1 : Poules</span>
                    <p class="text-center my-4">4 groupes | 16 équipes</p>
                    <a href="#" class="sm:w-3/12 text-center py-4 sm:px-4 bg-pinkLDV text-white font-bold uppercase rounded-b-lg sm:rounded-r-full">En cours</a>
                </div>
                <div class="sm:w-9/12 flex flex-col sm:flex-row sm:justify-between bg-white text-blackLDV rounded-lg sm:rounded-full sm:pl-4">
                    <span class="text-center font-bold mt-4">Phase 1 : Poules</span>
                    <p class="text-center my-4">4 groupes | 16 équipes</p>
                    <a href="#" class="sm:w-3/12 text-center py-4 sm:px-4 bg-gray-300 text-white font-bold uppercase rounded-b-lg sm:rounded-r-full">En attente</a>
                </div>
            </section>
            {{-- End of the structure --}}
        </div>

        <section class="mb-10">
            <h3 class="mb-3 sm:mb-8">Règles</h3>
            <p>Votre présence sur notre discord est obligatoire pour participer au tournoi et valider votre inscription: https://discord.gg/rZrteZ4UnB

                Dates

                Phases de poules en BO5
                Un match par soir à 21h le:
                Lundi 30 Novembre
                Mardi 1 Décembre
                Mercredi 2 Décembre
                Jeudi 3 Décembre

                Vous ne jouerez que trois fois parmi ces quatres dates !

                A l'issue des phases de poules, les deux premières équipes de chaque poules sont qualifiées en playoffs.

                Phases de playoffs en BO7:

                Quart de finales le Vendredi 4 Décembre à 21h
                Demi-finales le Samedi 5 Décembre à 21h

                Phases finales BO7:
                Finale le Dimanche 6 décembre à 21h.
                Petite finale organisable si les équipes le souhaitent


                Format des matchs

                Pas de heropool.

                La création des parties est à la charge des équipes, en cas de litiges, veuillez contactez un organisateur. Un code contenant les paramètres compétitifs vous sera fourni.

                L'équipe qui sort perdante d'une carte a le choix de son side (attaque ou défense) sur la prochaine carte.</p>
        </section>
        {{-- End of the rules --}}

        <section class="mb-10">
            <h3 class="mb-3 sm:mb-8">Liens</h3>
            <p>Discord du tournoi (présence obligatoire) : https://discord.gg/rZrteZ4UnB</p>
        </section>
        {{-- End of the links --}}

        <div class="flex justify-center">
            <a class="mb-16 px-8 py-2 bg-pinkLDV text-white font-bold uppercase rounded-full">S'inscrire ou inscrire son équipe</a>
        </div>
    </main>
@endsection
