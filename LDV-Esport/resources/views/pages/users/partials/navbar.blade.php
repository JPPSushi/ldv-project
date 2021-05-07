<nav class="w-full">
    <div class="flex justify-between items-center px-36">
        <a href="./"><img id="logo" class="p-5" src="/img/ldv-logo.png" alt="Logo LDV Esport"></a>

        <div id="list-items" class="flex float-right items-center list-none font-sans font-bold no-underline text-white">
            <a class="mx-8" href="{{url("/games")}}"><li>Tournois / Jeux</li></a>
            <a class="mx-8" href="{{url("/all-tournaments")}}"><li>Tous</li></a>
            <a class="mx-8" href="{{ url("/ranking") }}"><li>Classement</li></a>
            <a class="mx-8" href="{{ url("/twitch") }}"><li>Twitch</li></a>
            <a class="mx-8" href="{{ url("/discord") }}"><li>Discord</li></a>
            <a class="mx-8" href="{{ route('contact') }}"><li>Contact</li></a>
            <a class="mx-8" href="{{ route('dashboard') }}"><button class="bg-pinkLDV rounded-3xl font-bold px-6 py-1.5 text-white">Se connecter</button></a>
        </div>

    </div>
</nav>
