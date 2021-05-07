<x-app-layout>
    <x-slot name="header">
        <h2 class="mx-4 md:mx-0">
            {{ __('LDV TOURNAMENT : ADMIN') }}
        </h2>
    </x-slot>

    <div class="2xl:pt-16">
        <div class="flex flex-col md:flex-row">
            <a href="{{ route('tournaments.create') }}" class="my-4 md:my-0 mx-4 py-16 md:py-40 px-24 bg-white overflow-hidden shadow-xl sm:rounded-lg text-gray-800 uppercase font-bold text-center">
                <img src="{{ asset('img/icone_dashboard/manette.png')}}" class="mx-auto mb-16" alt="Illustration d'une manette de jeu">
                Créer un tournoi
            </a>
            <a href="{{ route('tournaments.index') }}" class="my-4 md:my-0 mx-4 py-16 md:py-40 px-24 bg-white overflow-hidden shadow-xl sm:rounded-lg text-gray-800 uppercase font-bold text-center">
                <img src="{{ asset('img/icone_dashboard/screen.png')}}" class="mx-auto mb-16" alt="Illustration d'un écran d'ordinateur">
                Accéder au tableau de bord d'un tournoi
            </a>
            <a href="{{ route('params') }}" class="my-4 md:my-0 mx-4 py-16 md:py-40 px-24 bg-white overflow-hidden shadow-xl sm:rounded-lg text-gray-800 uppercase font-bold text-center">
                <img src="{{ asset('img/icone_dashboard/rouage.png')}}" class="mx-auto mb-16" alt="Illustration d'un rouage">
                Paramètres
            </a>
        </div>
    </div>
</x-app-layout>
