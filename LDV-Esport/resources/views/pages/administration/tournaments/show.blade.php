<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ $tournois->title }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="md:grid md:grid-cols-3 md:gap-20 2xl:gap-40 mx-4 md:mx-0 md:mr-10">
            <section class="md:col-span-2">
                <h3 class="mb-6">Fonctionnement</h3>
                <p class="mb-10">
                La Liste des tournois contient tous les tournois en cours ou passés créés sur la plateforme.

                <br><br>Enregistrer un résultat permet d'enregistrer le résultat d'un match. Il est affiché dans la partie
                Derniers résultats du tableau de bord lorsqu'il a été pris en compte.

                <br><br>Le Tableau des scores permet de voir le classement général du tournoi en cours ou fini.

                <br><br>L'onglet Participants est la liste de tous les participants au tournoi de façon individuelle si le jeu
                est en équipe.

                <br><br>Les Paramètres du tournoi peuvent être modifier via l'onglet du même nom. Attention, tous les
                changements seront directement visibles depuis la partie visible du site.
                </p>
                <a href="#" class="bg-green-500 py-4 px-6 md:py-5 md:px-40 rounded-full uppercase font-bold shadow-lg">Enregistrer un résultat</a>
            </section>
            <section class="mt-16 md:mt-0">
                <h3 class="mb-6">Derniers résultats</h3>
                <div class="bg-white text-gray-800">
                    @for($i = 0; $i < 3; $i++)
                        <p class="uppercase font-bold text-lg text-center pt-6">Poule A</p>
                        <div class="flex items-center justify-between px-6 pb-6">
                            <p class="font-bold">LDV Esport</p>
                            <p class="font-bold md:text-xl 2xl:text-2xl">
                            3
                            <span class="text-pinkLDV font-bold text-3xl">-</span>
                            1
                            </p>
                            <p>Téki Blue Météor</p>
                        </div>
                        <hr>
                    @endfor
                </div>
            </section>
            <section class="my-16 md:mt-0 md:col-span-3">
                <h3 class="mb-6">Rencontres à venir</h3>
                <div class="bg-white text-gray-800 md:divide-y md:divide-light-grey-400 rounded-lg">
                    <div class="flex flex-col md:flex-row items-center justify-between md:w-full h-60 md:h-16">
                        <p class="uppercase font-bold text-lg md:ml-10 pt-6 md:pt-0">Poule A</p>
                        <div class="md:w-1/2 flex items-center justify-around mx-2 md:mx-0">
                            <p>LDV Esport</p>
                            <img src="{{ asset('img/ldv-logo.png') }}" alt="logo1">
                            <span class="font-bold text-3xl">VS</span>
                            <img src="{{ asset('img/ldv-logo.png') }}" alt="logo2">
                            <p>Choeur de Gamers</p>
                        </div>
                        <a href="#" class="md:rounded-tr-lg bg-pinkLDV w-full md:w-40 h-16 flex items-center justify-center uppercase text-white font-bold">Voir</a>
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-between md:w-full h-60 md:h-16 mt-10 md:mt-0">
                        <p class="uppercase font-bold text-lg md:ml-10">Poule A</p>
                        <div class="md:w-1/2 flex items-center justify-around mx-2 md:mx-0">
                            <p>LDV Esport</p>
                            <img src="{{ asset('img/ldv-logo.png') }}" alt="logo1">
                            <span class="font-bold text-3xl">VS</span>
                            <img src="{{ asset('img/ldv-logo.png') }}" alt="logo2">
                            <p>Choeur de Gamers</p>
                        </div>
                        <a href="#" class="rounded-b-lg md:rounded-br-lg bg-pinkLDV w-full md:w-40 h-16 flex items-center justify-center uppercase text-white font-bold">Voir</a>
                    </div>
                </div>
            </section>
        </div>
    </x-slot>

</x-app-layout>
