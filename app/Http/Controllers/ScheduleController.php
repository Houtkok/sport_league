<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\stadium;
use App\Models\team;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show(){
        $schedules = schedule::all();
        return view('schedule.scheduleIndex',compact('schedules'));
    }
    public function create(){
        $stadiums = stadium::all();
        $teams = team::all();
        return view('schedule.scheduleCreate',compact('stadiums','teams'));
    }
    public function create_handle(Request $request){
        $request->validate([
            'match_time'=>'required|date',
            'match_name'=>'required|string|max:255',
            'stadium_id'=>'required|integer|exists:stadiums,stadium_id',
            'team_A'=>'required|integer|exists:teams,team_id',
            'team_B'=>'required|integer|exists:teams,team_id',
        ]);
        schedule::create([
            'match_time'=>$request->match_time,
            'match_name'=>'required|string|unique:nationals|max:255',
            'stadium_id'=>$request->stadium_id,
            'team_A'=>$request->team_id,
            'team_B'=>$request->team_id,
        ]);
        return redirect('schedules')->with('status','Schedule created sucessfully');
    }

    public function update(int $match_id){
        $schedules = schedule::findOrFail($match_id);
        return view('schedule.scheduleUpdate',compact('schedules'));
    }
    public function update_handle(Request $request, int $match_id){ 
        $request->validate([
            'match_time'=>'required|date',
            'stadium_id'=>'required|integer|exists:stadium_id',
            'team_A'=>'required|integer|exists:teams,team_id',
            'team_B'=>'required|integer|exists:teams,team_id',
        ]);
        schedule::findOrFail($match_id)->update([
            'match_time'=>$request->match_time,
            'stadium_id'=>$request->stadium_id,
            'team_A'=>$request->team_id,
            'team_B'=>$request->team_id,
        ]);
        return redirect('schedules')->with('status','Schedule updated successfully');
    }

    public function destroy(int $coach_id){
        schedule::findOrFail($coach_id)->delete();
        return redirect('schedules')->with('status','Schedules deleted successfully');
    }
}
