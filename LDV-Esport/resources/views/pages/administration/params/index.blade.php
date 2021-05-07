<x-app-layout>
    <x-slot name="header">
        <h2 class="mx-4 md:mx-0">
            {{ __('Paramètres') }}
        </h2>
    </x-slot>

    <div class="py-12 h-44 lg:flex mx-4 md:mx-16 lg:mx-0">
        <section class="w-1/2">
            <h3 class="mb-6">Administrateurs</h3>
            <table>
                @for($i = 0; $i < 10; $i++)
                    <tr class="border-b-2">
                        <td class="pr-44 lg:pr-80 py-2">Pseudo</td>
                        <td class="lg:pr-10 py-2 italic text-gray-500">Supprimer</td>
                    </tr>
                @endfor
            </table>
        </section>
        <section class="w-1/2 mt-16 lg:mt-0">
            <h3 class="mb-6">Liste des jeux</h3>
            <table>
                @for($i = 0; $i < 15; $i++)
                    <tr class="border-b-2">
                        <td class="pr-44 lg:pr-80 py-2 ">Nom du jeu</td>
                        <td class="lg:pr-10 py-2 italic text-gray-500">Supprimer</td>
                    </tr>
                @endfor
            </table>
        </section>
    </div>
</x-app-layout>
