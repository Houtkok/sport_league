<?php

namespace App\Http\Controllers;

use App\Models\stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function show(){
        $stadiums = stadium::all();
        return view('stadium.stadiumIndex',compact('stadiums'));
    }   

    public function create(){
        return view('stadium.stadiumCreate');
    }
    public function create_handle(Request $request){
        $request->validate([
            'stadium_name'=>'required|string|unique:stadiums|max:255',
            'capacity'=>'required|integer|min:1',
            'location'=>'required|string|max:255',
        ]);
        stadium::create([
            'stadium_name'=>$request->stadium_name,
            'capacity'=>$request->capacity,
            'location'=>$request->location,
        ]);
        return redirect('stadiums')->with('status', 'Stadium created successfully');
    }

    public function update(int $stadium_id){
        $stadiums = stadium::findOrFail($stadium_id);
        return view('stadium.stadiumUpdate',compact('stadiums'));
    }

    public function update_handle(Request $request, int $stadium_id){
        $request->validate([
            'stadium_name'=>'required|string|unique:stadiums|max:255',
            'capacity'=>'required|integer|min:1',
            'location'=>'required|string|max:255',
        ]);
        stadium::findOrFail($stadium_id)->update([
            'stadium_name'=>$request->stadium_name,
            'capacity'=>$request->capacity,
            'location'=>$request->location,
        ]);
        return redirect('stadiums')->with('status', 'Stadium updated successfully');
    }

    public function destroy(int $stadium_id){
        stadium::findOrFail($stadium_id)->delete();
        return redirect('stadiums')->with('status', 'Stadium deleted successfully');
    }
}
