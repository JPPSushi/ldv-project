<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = DB::table('games')->get();
        return view('pages.administration.games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.administration.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('games')->insert([
            'name' => $request->name,
            'game_thumbnail' => $request->game_thumbnail->getClientOriginalName()
        ]);

        $request->game_thumbnail->move(public_path('storage/game_thumbnails'), $request->game_thumbnail->getClientOriginalName());

        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = DB::table('games')->find($id, ['id', 'name', 'game_thumbnail']);
        return view("pages.administration.games.edit", compact('game'));
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

        if(empty($request->game_thumbnail)) {
            $request->game_thumbnail = DB::table('games')->find($id, ['game_thumbnail'])->game_thumbnail;
        } else {
            $request->game_thumbnail->move(public_path('storage/game_thumbnails'), $request->game_thumbnail->getClientOriginalName());
        }

        DB::table('games')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'game_thumbnail' => $request->game_thumbnail->getClientOriginalName()
        ]);

        return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('games')->where('id', '=', $id)->delete();
        return redirect()->route('game.index');
    }
}
