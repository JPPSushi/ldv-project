@extends('layouts.base')

@section('main')

<section id="oui" class="w-full flex flex-col pb-32">

    <h2 class="pt-64 ml-36">Nos réseaux</h2>

    <div class="flex justify-center pt-20">
        <img class="w-20 mx-14" src="/img/facebook-logo.png" alt="Facebook">
        <img class="w-20 mx-14" src="/img/twitter-logo.png" alt="Twitter">
        <img class="w-20 mx-14" src="/img/twitch-logo.png" alt="Twitch">
        <img class="w-20 mx-14" src="/img/discord-logo.png" alt="Discord">
        <img class="w-20 mx-14" src="/img/linkedin-logo.png" alt="LinkedIn">
        <img class="w-20 mx-14" src="/img/youtube-logo.png" alt="Youtube">
    </div>

    <button class="self-center mt-20 bg-pinkLDV py-2 px-6 uppercase font-bold rounded-3xl">Rejoins nous !</button>

    <h2 class="pt-20 ml-36">Contacte nous par mail</h2>

    <p class="pt-20 ml-36">Un membre du staff vous répondra rapidement: <span class="font-bold">contact@ldvesport.com</span></p>

</section>

<style>

nav {
    position: absolute;
}

#oui {
    background-image: url("/img/header-bg.png");
    background-position: cover;
    background-repeat: no-repeat;
}

</style>

@endsection
