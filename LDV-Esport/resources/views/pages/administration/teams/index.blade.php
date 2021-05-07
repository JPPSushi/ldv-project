<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des équipes') }}
        </h2>
    </x-slot>

<div class="py-12">
    <button class="mr-5 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
        <x-jet-nav-link href="{{ route('team.create') }}" :active="request()->routeIs('team.create')">
            {{ __('Créer une équipe') }}
        </x-jet-nav-link>
    </button>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom d'équipe
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach($teams as $team) :

                                $gid = $team->id;?>
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$team->name}}
                                    </div>
                                </td>
                                <td class=" whitespace-nowrap">
                                    <div class="flex-shrink-0" style="width:70%;">
                                        <img style="height:30vH;" src="{{ asset('storage/team_photos/'). '/' . $team->team_image}}">
                                    </div>
                                </td>
                                <td class=" py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('team.edit', $gid) }}" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Edit</a>
                                </td>
                                </tr>
                                <?php endforeach; ?>

                                <!-- More items... -->
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
