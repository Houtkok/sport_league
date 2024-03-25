<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){
        $tickets = ticket::all();
        return view('ticket.ticketIndex',compact('tickets'));
    }
    
    public function create(){
        return view('ticket.ticketCreate');
    }
    public function create_handle(Request $request){
        $request->validate([
            'seat_type'=>'required|string|max:255',
            'price'=>'required|float',
            'qty'=>'required|integer|min:0',
            'match_id'=>'required|integer|exists:match_id',
            'user_id'=>'required|integer|exists:user_id',
        ]);
        ticket::create([
            'seat_type'=>$request->seat_type,
            'match_id'=>$request->match_id,
            'user_id'=>$request->user_id,
        ]);
        return redirect('tickets')->with('status', 'Ticket created successfully');
    }
    public function update(Request $request, int $ticket){
        $tickets = ticket::findOrFail($ticket);
        $request->validate([
            'seat_type'=>'required|string|max:255',
            'match_id'=>'required|integer|exists:match_id',
            'user_id'=>'required|integer|exists:user_id',
        ]);
        $tickets->update([
            'seat_type'=>$request->seat_type,
            'match_id'=>$request->match_id,
            'user_id'=>$request->user_id,
        ]);
        return redirect('tickets')->with('status', 'Ticket updated successfully');
    }

    public function destroy(int $ticket_id){
        ticket::findOrFail($ticket_id)->delete();
        return redirect('tickets')->with('status', 'Ticket deleted successfully');
    }

    // public function purchase(Request $request){
    //     $request->validate([
    //         'seat_type'=>'required|string|max:255',
    //         'match_id'=>'required|integer|exists:match_id',
    //         'user_id'=>'required|integer|exists:user_id',
    //         'qty'=>'required|integer|min:1',
    //     ]);
    //     $match_id=$request->input('match_id');
    //     $qty=$request->input('qty');

    //     $tickets=Ticket::where ('match_id',$match_id)->take($qty)->get();
    //     if($tickets->count()<$qty){
    //         return false;
    //     }
    //     foreach($tickets as $ticket){
    //         $ticket->user_id=$request->input('user_id');
    //         $ticket->save();
    //     }
    //     $remainQty=$ticket->count()-$qty;
    //     Ticket::where('match_id',$match_id)->take($remainQty)->update(['user_id'=>null]);
    //     return ;
    // }
}
