<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Participant;
use App\Models\SoloMatch;
use App\Models\SoloTournament;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use DateTime;
use Illuminate\Support\Arr;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tournois = SoloTournament::all();

        foreach($tournois as $tourn) {
            $tourn->reg_players = Participant::where("tournament_id", "=", $tourn->id)->count();
        }



        return view('pages.administration.tournaments.index', compact('tournois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();
        return view('pages.administration.tournaments.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            "title" => ['required', 'unique:solo_tournaments'],
            "description" => ['required'],
            "game_id" => ['required'],
            "date_start" => ['required', 'after:now'],
            "date_end" => ['required', 'after:date_start'],
            "players" => ['required'],
            // "cashprize" => ['required'],
            "rules" => ['required'],
            "links" => ['required'],
            // "image" => ['required'],
        ]);

        SoloTournament::create($request->only(
            "title",
            "description",
            "game_id",
            "date_start",
            "date_end",
            "players",
            "cashprize",
            "rules",
            "links",
            "image"
        ));

        // $request->image->move(public_path('storage/tournament_thumbnails'), $request->image->getClientOriginalName());

        return redirect()->route('tournaments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournois = SoloTournament::findOrFail($id);
        return view('pages.administration.tournaments.show', compact('tournois'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function result()
    {
        return view('pages.administration.tournaments.result');
    }

    public function score()
    {
        return view('pages.administration.tournaments.score');
    }

    public function playerIndex()
    {
        $players = User::all();
        return view('pages.administration.players.index', compact('players'));
    }
    public function playerShow()
    {
        $player = Auth::user();
        return view('pages.users.profile', compact('player'));
    }

    public function generate($id)
    {
        $participants = Participant::where('tournament_id', '=', $id)->get();

        $participants = $participants->toArray();

        shuffle($participants);

        $tournament = SoloTournament::findOrFail($id);

        $matches = [];

        for($i = 0; $i <= floor($tournament->players/2 - 1); $i++) {
            echo $i;
            $matches[$i] = array_slice($participants, 0, 2);
            \array_splice($participants, 0,2);
        }

        foreach($matches as $match)
        {
            $newmatch = new SoloMatch;

            $newmatch->player_a_id = $match[0]["user_id"];
            $newmatch->player_b_id = $match[1]["user_id"];

            $newmatch->player_a_score = 0;
            $newmatch->player_b_score = 0;

            $newmatch->status = 0;

            $newmatch->tournament_id = $id;

            $newmatch->round = 1;

            $newmatch->save();

        }

    }
}
