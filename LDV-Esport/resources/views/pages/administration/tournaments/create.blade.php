<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ __('Créer un tournoi') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div>

            @if($errors->any())
            @foreach($errors->all() as $error)
            <h2 class="error">{{$error}}</h2>
            @endforeach
            @endif
            <form action="{{ route('tournaments.store')}}" method="post" class="md:grid md:grid-cols-2 md:gap-x-44 mx-4 md:ml-0 md:mr-14" enctype="multipart/form-data">
                @csrf
                <div class="md:col-start-1 md:col-end-2">
                    <label for="name" class="font-bold text-lg">Nom du tournoi :</label>
                    <input type="text" name="title" class="w-full rounded-lg" required>

                <div class="mt-10 md:col-start-2 md:col-end-3">
                    <label for="logo" class="font-bold text-lg">Logo du tournoi (facultatif) :</label>
                    <input type="file" name="logo" class="w-full">
                </div>

                {{-- section avec le choix d'un jeu, à mettre en PHP avec une boucle pour afficher les jeux --}}
                <div class="md:col-start-1 md:col-end-3 grid grid-cols-3 md:grid-cols-6 gap-6 mt-10 md:mt-14">
                    <p class="font-bold text-lg">Jeu :</p>

                    @foreach ($games as $game)


                    <div class="col-start-{{$game->id}}">
                        <input type="radio" name="game_id" id="l{{$game->id}}" value="{{$game->id}}" required>
                        <label for="l{{$game->id}}">
                            <img src="{{ asset('storage/game_thumbnails/'). '/' . $game->game_thumbnail}}" class="w-max rounded-3xl focus:outline-black">
                        </label>
                    </div>

                    @endforeach

                </div>

                <div class="md:col-start-1 md:col-end-3 md:grid md:grid-cols-2 md:gap-x-44 mt-14">
                    <p class="md:col-start-1 font-bold text-lg">Date de l'événement :</p>
                    <div class="md:col-start-1 md:col-end-2 w-full mt-4 md:mt-0">
                        <label for="date_start">Début :</label>
                        <input type="date" id="date_start" name="date_start" class="rounded-lg" required>
                    </div>
                    <div class="md:col-start-2 md:col-end-3 w-full mt-4 md:mt-0">
                        <label for="date_end">Fin :</label>
                        <input type="date" id="date_end" name="date_end" class="rounded-lg" required>
                    </div>
                </div>

                <div class="md:col-start-1 md:col-end-2 mt-14">
                    <label for="cashprize" class="font-bold text-lg">Cashprize :</label>
                    <input type="number" id="cashprize" name="cashprize" class="w-full rounded-lg mt-4 md:mt-0">
                </div>


                <div class="col-start-1 mt-14">
                    <label for="participantNumber" class="font-bold text-little-title">Nombre de joueurs / d'équipes :</label>
                    <select id="participantNumber" name="players" class="w-full rounded-lg" required>
                        <option>4</option>
                        <option>8</option>
                        <option>16</option>
                        <option>32</option>
                        <option>64</option>
                    </select>
                </div>

                {{-- section avec le choix de la structure --}}
                {{-- <div class="col-start-1 col-end-3 grid grid-cols-6 gap-6 mt-14">
                    <p class="font-bold text-little-title">Structure :</p>
                    <div class="col-start-1 col-end-3 text-center bg-greyLDV py-2 px-6 rounded-lg cursor-pointer">
                        <input type="radio" name="structure" id="round-robin-elim" class="hidden">
                        <label for="round-robin-elim">
                            Round Robin puis Elimination Directe
                        </label>
                    </div>
                    <div class="col-start-3 text-center bg-greyLDV py-2 px-6 rounded-lg cursor-pointer">
                        <input type="radio" name="structure" id="elimination" class="hidden">
                        <label for="elimination">
                            Elimination Directe
                        </label>
                    </div>
                    <div class="col-start-4 text-center bg-greyLDV py-2 px-6 rounded-lg cursor-pointer">
                        <input type="radio" name="structure" id="double-elimination" class="hidden">
                        <label for="double-elimination">
                            Double Elimination
                        </label>
                    </div>
                    <div class="col-start-5 text-center bg-greyLDV py-2 px-6 rounded-lg cursor-pointer">
                        <input type="radio" name="structure" id="round-robin" class="hidden">
                        <label for="round-robin">
                            Round Robin
                        </label>
                    </div>
                </div> --}}

                <div class="col-start-1 col-end-3 mt-14">
                    <label for="description" class="font-bold text-lg">Description du tournoi :</label>
                    <textarea id="description" name="description" class="w-full h-44 rounded-lg" style="resize: none" required></textarea>
                </div>

                <div class="col-start-1 col-end-3 mt-14">
                    <label for="rules" class="font-bold text-lg">Règles :</label>
                    <textarea id="rules" name="rules" class="w-full h-96 rounded-lg" style="resize: none" required></textarea>
                </div>

                <div class="col-start-1 col-end-3 mt-14">
                    <label for="links" class="font-bold text-lg">Liens utiles :</label>
                    <textarea id="links" name="links" class="w-full h-28 rounded-lg" style="resize: none" required></textarea>
                </div>

                <div class="col-start-1 col-end-3 grid grid-cols-3 gap-4 mt-14">
                    <button type="submit" class="col-start-2 mt-10 mb-16 py-3 px-8 rounded-3xl bg-pinkLDV text-lg uppercase text-white font-bold">Créer le tournoi</button>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
