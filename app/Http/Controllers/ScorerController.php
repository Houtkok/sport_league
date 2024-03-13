<?php

namespace App\Http\Controllers;

use App\Models\scorer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScorerController extends Controller
{
    public function show(){
        $scorers = scorer::all();
        return view('',['scorers'=>$scorers]);
    }

    public function create(Request $request){
        $request->validate([
            'goal_count'=>'required|integer',
            'goal_time'=>'required|date',
        ]);
        $scorers = scorer::create([
            'goal_count'=>$request->input('goal_count'),
            'goal_time'=>$request->input('goal_time'),
        ]);
        return ;
    }

    public function update(Request $request, scorer $scorers_id){
        $scorers = scorer::findOrFail($scorers_id);
        $request->validate([
            'goal_count'=>'required|integer',
            'goal_time'=>'required|date',
        ]);
        $scorers->update([
            'goal_count'=>$request->input('goal_count'),
            'goal_time'=>$request->input('goal_time'),
        ]);
        return ;
    }

    public function destroy(scorer $scorer_id){
        $scorers=scorer::findOrFail($scorer_id);
        $scorers->delete();
        return ;
    }
}
