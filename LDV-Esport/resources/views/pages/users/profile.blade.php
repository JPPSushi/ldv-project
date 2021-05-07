@extends('layouts.base')

@section('main')
    <div class="flex w-screen justify-around items-center">
        <div class="flex items-center gap-24">
            <img class="w-48 rounded-full" src="{{ $player->profile_photo_url }}">
            <p>{{ $player->name }}</p>
        </div>
        <div class="flex items-center gap-10">
            <img src="img/discord-logo.png">
            <p>{{ $player->discord }}</p>
        </div>
    </div>
@endsection

