<?php

namespace App\Http\Controllers;

use App\Models\coach;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class CoachController extends Controller
{
    public function show(){
        $coaches = coach::all();
        return view('',['coaches'=>$coaches]);
    }

    public function create(Request $request){
        $request->validate([
            'coach_name'=>'required|string|unique:coaches|max:255',
        ]);
        $coach = coach::create([
            'coach_name'=>$request->input('coach_name'),
        ]);
        return ['coach'=>$coach];
    }

    public function update(Request $request, coach $coach_id){
        $coach = coach::findOrFail($coach_id);
        $request->validate([
            'coach_name'=>'required|string|unique:nationals|max:255',
        ]);
        $coach->update([
            'coach_name'=>$request->input('coach_name'),
        ]);
        return ['coach_name'=>$coach];
    }

    public function destroy(coach $coach_id){
        $national=coach::findOrFail($coach_id);
        $national->delete();
        return ;
    }
}
