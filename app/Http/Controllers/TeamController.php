<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TeamController extends Controller
{
    public function show(){
        $teams = team::all();
        return view('',['teams'=>$teams]);
    }
    public function create(Request $request){
        $request->validate([
            'team_name'=>'required|string|unique:teams|max:255',
            'coach_id'=>'required|integer|exists:coach_id',
            'player_id'=>'required|integer|exists:player_id',
        ]);
        $teams = team::create([
            'team_name'=>$request->input('team_name'),
            'coach_id'=>$request->input('coach_id'),
            'player_id'=>$request->input('player_id'),
        ]);
        return ;
    }

    public function update(Request $request, team $stadium_id){
        $teams = team::findOrFail($stadium_id);
        $request->validate([
            'team_name'=>'required|string|unique:teams|max:255',
            'coach_id'=>'required|integer|exists:coach_id',
            'player_id'=>'required|integer|exists:player_id',
        ]);
        $teams->update([
            'team_name'=>$request->input('team_name'),
            'coach_id'=>$request->input('coach_id'),
            'player_id'=>$request->input('player_id'),
        ]);
        return ;
    }

    public function destroy(team $team_id){
        $teams=team::findOrFail($team_id);
        $teams->delete();
        return ;
    }
}
