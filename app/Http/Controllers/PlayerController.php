<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Models\national;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(){
        $players = player::all();
        $nationals = national::all();
        return view('player.playerIndex',compact('players','nationals'));
    }
    
    public function create(){
        $nationals = national::all();
        return view('player.playerCreate',compact('nationals'));
    }
    public function create_handle(Request $request){
        $request->validate([
            'player_id'=>'required|integer|unique:players',
            'player_fname'=>'required|string|max:255',
            'player_lname'=>'required|string|max:255',
            'dob'=>'required|date',
            'position'=>'required|string',
            'national_id'=>'required|integer|exists:nationals,national_id',
        ]);
        player::create([
            'player_id'=>$request->player_id,
            'player_fname'=>$request->player_fname,
            'player_lname'=>$request->player_lname,
            'dob'=>$request->dob,
            'position'=>$request->position,
            'national_id'=>$request->national_id,
        ]);
        return redirect('players')->with('status','Player created successfully');
    }

    public function update(int $player_id){
        $players = player::findOrFail($player_id);
        $nationals = national::all();
        return view('player.playerUpdate',compact('players','nationals'));
    }
    public function update_handle(Request $request, int $player_id){
        $request->validate([
            'player_id'=>'required|integer|unique:players',
            'player_fname'=>'required|string|max:255',
            'player_lname'=>'required|string|max:255',
            'dob'=>'required|date',
            'position'=>'required|string',
            'national_id'=>'required|integer|exists:nationals,national_id',
        ]);
        player::create([
            'player_id'=>$request->player_id,
            'player_fname'=>$request->player_fname,
            'player_lname'=>$request->player_lname,
            'dob'=>$request->dob,
            'position'=>$request->position,
            'national_id'=>$request->national_id,
        ]);
        return redirect('players')->with('status','Update Player');
    }
    public function destroy(player $player_id){
        player::findOrFail($player_id)->delete();
        return redirect('players')->with('stutus','Player Delete');
    }
}
