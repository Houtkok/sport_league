<?php

namespace App\Http\Controllers;

use App\Models\national;
use Illuminate\Http\Request;

class NationalController extends Controller
{
    public function show(){
        $nationals = national::all();
        return view('national.nationalIndex',compact('nationals'));
    }
    
    public function create(){
        return view('national.nationalCreate');
    }
    public function create_handle(Request $request){
        $request->validate([
            'national_name'=>'required|string|unique:nationals|max:255',
        ]);
        national::create([
            'national_name'=>$request->national_name,
        ]);
        return redirect('nationals')->with('status','National created succesfully');
    }
    public function update(int $national_id){
        $national = national::findOrFail($national_id);
        return view('national.nationalUpdate',compact('national'));
    }
    public function update_handle(Request $request, int $national_id){
        $request->validate([
            'national_name'=>'required|string|unique:nationals|max:255',
        ]);
        national::findOrFail($national_id)->update([
            'national_name'=>$request->national_name,
        ]);
        return redirect('nationals')->with('status','National updated succesfully');
    }
    public function destroy(int $national_id){
        national::findOrFail($national_id)->delete();
        return redirect('nationals')->with('status','National deleted succesfully');
    }
}
