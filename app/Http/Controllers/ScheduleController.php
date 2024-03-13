<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScheduleController extends Controller
{
    public function show(){
        $schedules = schedule::all();
        return view('',['schedules'=>$schedules]);
    }
    public function create(Request $request){
        $request->validate([
            'match_time'=>'required|date',
            'stadium_id'=>'required|integer|exists:stadium_id',
            'team_id'=>'required|integer|exists:team_id',
        ]);
        $schedules = schedule::create([
            'match_time'=>$request->input('match_time'),
            'stadium_id'=>$request->input('stadium_id'),
            'team_id'=>$request->input('team_id'),
        ]);
        return ;
    }

    public function update(Request $request, schedule $match_id){
        $schedules = schedule::findOrFail($match_id);
        $request->validate([
            'match_time'=>'required|date',
            'stadium_id'=>'required|integer|exists:stadium_id',
            'team_id'=>'required|integer|exists:team_id',
        ]);
        $schedules->update([
            'match_time'=>$request->input('match_time'),
            'stadium_id'=>$request->input('stadium_id'),
            'team_id'=>$request->input('team_id'),
        ]);
        return ;
    }

    public function destroy(schedule $coach_id){
        $schedules=schedule::findOrFail($coach_id);
        $schedules->delete();
        return ;
    }
}
