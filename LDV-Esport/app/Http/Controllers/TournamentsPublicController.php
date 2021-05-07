<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Game;
use Illuminate\Http\Request;
use App\Models\SoloTournament;
use Illuminate\Support\Facades\Date;

class TournamentsPublicController extends Controller
{
    public function index()
    {
        $tournois = SoloTournament::all();

        $date = new DateTime('now');

        $date = $date->format('Y-m-d');


        return view('pages.users.all-tournaments', compact('tournois', 'date'));
    }
}
