<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ __('Participants') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
         <div class="md:flex md:items-center md:justify-between mx-4 md:my-0 md:mr-16 mb-10">
            <div class="flex items-center justify-between md:justify-around">
                <p>Filtrer par :</p>
                <select class="bg-transparent border-0">
                    <option value="" class="bg-transparent">Equipe</option>
                    <option value="test1" class="text-black">Test1</option>
                    <option value="test2" class="text-black">Test2</option>
                </select>
                <select class="bg-transparent border-0">
                    <option value="" class="bg-transparent">Ordre Alphabétique</option>
                    <option value="test1" class="text-black">Croissant</option>
                    <option value="test2" class="text-black">Décroissant</option>
                </select>
            </div>
            <div>
                <label>Loupe</label>
                <input type="text" placeholder="Rechercher ..." class="bg-transparent border-0 border-b-2 italic">
            </div>
        </div>

        <div class="flex flex-col items-center mt-14">
            @foreach($players as $player)
                <div class="flex justify-around items-center w-10/12 md:w-8/12 border-2 border-gray-600 py-4 transform skew-x-12 m-5">
                    <div class="flex justify-between items-center w-20 transform -skew-x-12">
                        <p># {{ $player->id }}</p>
                        <img src="{{ $player->profile_photo_url }}" alt="logo" class="w-10 rounded-full">
                    </div>
                    <p class="transform -skew-x-12">{{ $player->name }}</p>
                    <img src="{{ asset('img/user.png') }}" alt="équipe" class="w-10 transform -skew-x-12">
                </div>
            @endforeach
        </div>
    </x-slot>

</x-app-layout>
