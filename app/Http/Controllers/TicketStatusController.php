<?php

namespace App\Http\Controllers;

use App\TicketStatus;
use Illuminate\Http\Request;

class TicketStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function addSeat(){
       return view('admin.seat.add-seat');
   }

    public function saveSeat(Request $request)
    {
        $seat = new TicketStatus();

        $seat->seat_type = $request->seat_type;
        $seat->seat_description = $request->seat_description;
        $seat->publication_status = $request->publication_status;

        $seat->save();

        return redirect('/add-seat')->with('message', 'Seat info save successfully');
    }

    public function manageSeatInfo() {
        $allseats = TicketStatus::all();
        return view('admin.seat.manage-seat', ['allseats'=>$allseats]);
    }
    public function unpublishedSeatInfo($id) {
        $seatById = TicketStatus::find($id);
        $seatById->publication_status = 0;
        $seatById->save();
        return redirect('/manage-seat')->with('message', 'Type Of Ticket info unpublished successfully');
    }
    public function publishedSeatInfo($id) {
        $seatById = TicketStatus::find($id);
        $seatById->publication_status = 1;
        $seatById->save();
        return redirect('/manage-seat')->with('message', 'Type Of Ticket info published successfully');
    }
    public function deleteSeatInfo($id){
        $ticketById = TicketStatus::find($id);
        $ticketById->delete();

        return redirect('/manage-seat')->with('message', 'Type Of Ticket info delete successfully');
    }
}
