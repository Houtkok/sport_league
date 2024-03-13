<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PlayerController extends Controller
{
    public function show(){
        $players = player::all();
        return view('',['players'=>$players]);;
    }
    public function create(Request $request){
        $request->validate([
            'player_id'=>'required|integer|unique:players',
            'player_fname'=>'required|string|max:255',
            'player_lanme'=>'required|string|max:255',
            'dob'=>'required|date',
            'position'=>'required|string',
            'national_id'=>'required|integer|exists:national_id',
            'scorer_id'=>'required|integer|exists:scorer_id',
        ]);
        $players = player::create([
            'player_id'=>$request->input('player_id'),
            'player_fname'=>$request->input('player_fname'),
            'player_lanme'=>$request->input('player_lname'),
            'dob'=>$request->input('dob'),
            'position'=>$request->input('position'),
            'national_id'=>$request->input('national_id'),
            'scorer_id'=>$request->input('scorer_id'),
        ]);
        return ;
    }
    public function update(Request $request, player $player_id){
        $players = player::findOrFail($player_id);
        $request->validate([
            'player_id'=>'required|integer|unique:players',
            'player_fname'=>'required|string|max:255',
            'player_lanme'=>'required|string|max:255',
            'dob'=>'required|date',
            'position'=>'required|string',
            'national_id'=>'required|integer|exists:national_id',
            'scorer_id'=>'required|integer|exists:scorer_id',
        ]);
        $players->update([
            'player_id'=>$request->input('player_id'),
            'player_fname'=>$request->input('player_fname'),
            'player_lanme'=>$request->input('player_lname'),
            'dob'=>$request->input('dob'),
            'position'=>$request->input('position'),
            'national_id'=>$request->input('national_id'),
            'scorer_id'=>$request->input('scorer_id'),
        ]);
        return ;
    }
    public function destroy(player $player_id){
        $players=player::findOrFail($player_id);
        $players->delete();
        return ;
    }
}
