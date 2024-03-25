<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\coach;
use App\Models\player;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show(){
        $teams = team::all();
        $coaches = coach::all();
        return view('team.teamIndex',compact('teams','coaches'));
    }
    public function create(){
        $coaches = coach::all();
        $players = player::all();
        return view('team.teamCreate',compact('coaches','players'));
    }
    public function create_handle(Request $request){
        $request->validate([
            'team_name'=>'required|string|max:255',
            'coach_id'=>'required|integer|exists:coaches,coach_id',
            'player_id'=>'required|integer|exists:players,player_id',
        ]);
        team::create([
            'team_name'=>$request->team_name,
            'coach_id'=>$request->coach_id,
            'player_id'=>$request->player_id,
        ]);
        return redirect('teams')->with('status', 'Team created successfully');
    }

    public function update(int $team_id){
        $teams = team::findOrFail($team_id);
        $coachs = coach::all();
        $players = player::all();
        return view('team.teamUpdate',compact('teams','coachs','players'));
    }
    public function update_handle(Request $request, int $stadium_id){
        $request->validate([
            'team_name'=>'required|string|max:255',
            'coach_id'=>'required|integer|exists:coaches,coach_id',
            'player_id'=>'required|integer|exists:players,player_id',
        ]);
        team::findOrFail($stadium_id)->update([
            'team_name'=>$request->team_name,
            'coach_id'=>$request->coach_id,
            'player_id'=>$request->player_id,
        ]);
        return redirect('teams')->with('status', 'Team updated successfully');
    }

    public function destroy(int $team_id){
        team::findOrFail($team_id)->delete();
        return redirect('teams')->with('status', 'Team deleted successfully');
    }
}
