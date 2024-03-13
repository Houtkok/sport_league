<?php

namespace App\Http\Controllers;

use App\Models\stadium;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StadiumController extends Controller
{
    public function show(){
        $stadiums = stadium::all();
        return view('',['stadiums'=>$stadiums]);
    }

    public function create(Request $request){
        $request->validate([
            'stadium_name'=>'required|string|unique:stadiums|max:255',
            'capacity'=>'required|integer|min:1',
            'location'=>'required|string|max:255',
        ]);
        $stadiums = stadium::create([
            'stadium_name'=>$request->input('stadium_name'),
            'capacity'=>$request->input('capacity'),
            'location'=>$request->input('location'),
        ]);
        return ;
    }

    public function update(Request $request, stadium $stadium_id){
        $stadiums = stadium::findOrFail($stadium_id);
        $request->validate([
            'stadium_name'=>'required|string|unique:stadiums|max:255',
            'capacity'=>'required|integer|min:1',
            'location'=>'required|string|max:255',
        ]);
        $stadiums->update([
            'stadium_name'=>$request->input('stadium_name'),
            'capacity'=>$request->input('capacity'),
            'location'=>$request->input('location'),
        ]);
        return ;
    }

    public function destroy(stadium $stadium_id){
        $stadiums=stadium::findOrFail($stadium_id);
        $stadiums->delete();
        return ;
    }
}
