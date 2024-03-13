<?php

namespace App\Http\Controllers;

use App\Models\national;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NationalController extends Controller
{
    public function show(){
        $nationals = national::all();
        return view('',['nationals'=>$nationals]);
    }
    public function create(Request $request){
        $request->validate([
            'national_name'=>'required|string|unique:nationals|max:255',
        ]);
        $nationals = national::create([
            'national_name'=>$request->input('national_name'),
        ]);
        return ;
    }
    public function update(Request $request, national $national_id){
        $national = national::findOrFail($national_id);
        $request->validate([
            'national_name'=>'required|string|unique:nationals|max:255',
        ]);
        $national->update([
            'national_name'=>$request->input('national_name'),
        ]);
        return ;
    }
    public function destroy(national $national_id){
        $national=national::findOrFail($national_id);
        $national->delete();
        return ;
    }
}
