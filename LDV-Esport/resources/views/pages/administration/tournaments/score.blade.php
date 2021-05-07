<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight mx-4 md:mx-0">
            {{ __('Tableau des scores') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <table class="block text-center px-4 md:px-0">
            <thead>
                <tr class="text-gray-600 italic">
                    <td>Classement</td>
                    <td>Logo</td>
                    <td>Nom</td>
                    <td>J</td>
                    <td>V</td>
                    <td>D</td>
                    <td>N</td>
                    <td>SP</td>
                    <td>SC</td>
                    <td>+/-</td>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 64; $i++)
                <tr class="border-2 border-gray-600 transform skew-x-12">
                    <td class="py-3 w-20 transform -skew-x-12">#1</td>
                    <td class="py-3 w-40 transform -skew-x-12">Logo</td>
                    <td class="py-3 w-40 transform -skew-x-12">Nom</td>
                    <td class="py-3 w-20 transform -skew-x-12">8</td>
                    <td class="py-3 w-20 transform -skew-x-12">8</td>
                    <td class="py-3 w-20 transform -skew-x-12">0</td>
                    <td class="py-3 w-20 transform -skew-x-12">0</td>
                    <td class="py-3 w-20 transform -skew-x-12">0</td>
                    <td class="py-3 w-20 transform -skew-x-12">0</td>
                    <td class="py-3 w-20 transform -skew-x-12">0</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </x-slot>

</x-app-layout>
