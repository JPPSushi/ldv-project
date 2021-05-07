<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $game->name }}
        </h2>
    </x-slot>

    <br>

    <form method="post" action="{{ route('game.update', $game->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="game_name" class="block text-sm font-medium text-gray-700">Nouveau nom</label>
                                <input type="text" name="name" id="game_name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$game->name}}" required>
                            </div>
                        </div>

                        <label for="files" class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">Ajouter la nouvelle image au jeu</label>
                        <input id="files" name="game_thumbnail" style="visibility:hidden;" type="file" value="{{$game->game_thumbnail}}" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
                        <img id="output" width="20%"/>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>

            </div>

    </form>

    <form method="post" action="{{ route('game.destroy', $game->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Effacer</button>
    </form>

</x-app-layout>