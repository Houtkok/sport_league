<?php

namespace App\Http\Controllers;

use App\Models\coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function show(){
        $coaches = coach::all();
        return view('coach.coachIndex',compact('coaches'));
    }
    
    public function create(){
        return view('coach.coachCreate');
    }

    public function create_handle(Request $request){
        $request->validate([
            'coach_name'=>'required|string|unique:coaches|max:255',
        ]);
        coach::create([
            'coach_name'=>$request->coach_name,
        ]);
        return redirect()->route('coach.show')->with('status', 'Coach created successfully');
    }

    public function update(int $coach_id){
        $coach = coach::findOrFail($coach_id);
        return view('coach.coachUpdate',compact('coach'));
    }

    public function update_handle(Request $request, int $coach_id){
        $request->validate([
            'coach_name'=>'required|string|unique:coaches|max:255',
        ]);
        coach::findOrFail($coach_id)->update([
            'coach_name'=>$request->coach_name,
        ]);
        return redirect()->route('coach.show')->with('status', 'Coach updated successfully');
    }

    public function destroy(int $coach_id){
        coach::findOrFail($coach_id)->delete();
        return redirect()->route('coach.show')->with('status', 'Coach deleted successfully');
    }
    
}
