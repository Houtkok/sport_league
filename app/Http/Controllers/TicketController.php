<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){
        $tickets = ticket::all();
        $schedules = schedule::all();
        return view('ticket.ticketIndex',compact('tickets','schedules'));
        }
    
    public function create(){
        $schedules = schedule::all();
        return view('ticket.ticketCreate',compact('schedules'));
    }
    public function create_handle(Request $request){
        $request->validate([
            'seat_type'=>'required|string|max:255',
            'price'=>'required',
            'qty'=>'required|integer|min:0',
            'match_id'=>'required|integer|exists:schedules,match_id',
        ]);
        ticket::create([
            'seat_type'=>$request->seat_type,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'match_id'=>$request->match_id,
        ]);
        return redirect('tickets')->with('status', 'Ticket created successfully');
    }
    public function update(int $ticket_id){
        $schedules = schedule::all();
        $tickets = ticket::findOrFail($ticket_id);
        return view('ticket.ticketUpdate',compact('schedules','tickets'));
    }
    public function update_handle(Request $request, int $ticket_id){
        $request->validate([
            'seat_type'=>'required|string|max:255',
            'price'=>'required',
            'qty'=>'required|integer|min:0',
            'match_id'=>'required|integer|exists:schedules,match_id',
        ]);
        ticket::findOrFail($ticket_id)->update([
            'seat_type'=>$request->seat_type,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'match_id'=>$request->match_id,
        ]);
        return redirect('tickets')->with('status', 'Ticket updated successfully');
    }

    public function destroy(int $ticket_id){
        ticket::findOrFail($ticket_id)->delete();
        return redirect('tickets')->with('status', 'Ticket deleted successfully');
    }
}
