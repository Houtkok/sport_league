<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TicketController extends Controller
{
    public function show(){
        $tickets = ticket::all();
        return view('',['tickets'=>$tickets]);
    }
    public function create(Request $request){
        $request->validate([
            'seat_num'=>'required|string|max:255',
            'seat_type'=>'required|string|max:255',
            'price'=>'required|float',
            'qty'=>'required|integer|min:0',
            'match_id'=>'required|integer|exists:match_id',
            'user_id'=>'required|integer|exists:user_id',
        ]);
        $tickets = ticket::create([
            'seat_num'=>$request->input('seat_num'),
            'seat_type'=>$request->input('seat_type'),
            'match_id'=>$request->input('match_id'),
            'user_id'=>$request->input('user_id'),
        ]);
        return ;
    }
    public function update(Request $request, ticket $stadium_id){
        $tickets = ticket::findOrFail($stadium_id);
        $request->validate([
            'seat_num'=>'required|string|max:255',
            'seat_type'=>'required|string|max:255',
            'match_id'=>'required|integer|exists:match_id',
            'user_id'=>'required|integer|exists:user_id',
        ]);
        $tickets->update([
            'seat_num'=>$request->input('seat_num'),
            'seat_type'=>$request->input('seat_type'),
            'match_id'=>$request->input('match_id'),
            'user_id'=>$request->input('user_id'),
        ]);
        return ;
    }

    public function destroy(ticket $ticket_id){
        $tickets=ticket::findOrFail($ticket_id);
        $tickets->delete();
        return ;
    }
    public function purchase(Request $request){
        $request->validate([
            'seat_num'=>'required|string|max:255',
            'seat_type'=>'required|string|max:255',
            'match_id'=>'required|integer|exists:match_id',
            'user_id'=>'required|integer|exists:user_id',
            'qty'=>'required|integer|min:1',
        ]);
        $match_id=$request->input('match_id');
        $qty=$request->input('qty');

        $tickets=Ticket::where ('match_id',$match_id)->take($qty)->get();
        if($tickets->count()<$qty){
            return false;
        }
        foreach($tickets as $ticket){
            $ticket->user_id=$request->input('user_id');
            $ticket->save();
        }
        $remainQty=$ticket->count()-$qty;
        Ticket::where('match_id',$match_id)->take($remainQty)->update(['user_id'=>null]);
        return ;
    }
}
