<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = DB::table('teams')->get();
        return view('pages.administration.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.administration.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('teams')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'leader_id' => Auth::user()->id,
            'team_image' => $request->team_image->getClientOriginalName()
        ]);

        $request->team_image->move(public_path('storage/team_photos'), $request->team_image->getClientOriginalName());

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view("pages.administration.teams.edit", compact('team'));
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

        if(empty($request->team_image)) {
            $request->team_image = DB::table('teams')->find($id, ['team_image'])->team_image;
        } else {
            $request->team_image->move(public_path('storage/team_photos'), $request->team_image->getClientOriginalName());
        }

        $image = is_string($request->team_image) ? $request->team_image : $request->team_image->getClientOriginalName();

        DB::table('teams')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'team_image' => $image,
        ]);

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teams')->where('id', '=', $id)->delete();
        return redirect()->route('team.index');
    }
}
