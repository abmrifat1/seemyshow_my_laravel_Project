<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Ticket;
use App\Moviehall;
use App\TicketShift;
use App\TicketStatus;
use DB;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function saveTicketInfo(Request $request){


        $ticket=new Ticket();
        $ticket->movie_name = $request->movie_name;
        $ticket->hall_name = $request->hall_name;
        $ticket->date = $request->date;
        $ticket->time = $request->time;
        $ticket->available_ticket = $request->available_ticket;
        $ticket->no_of_seat = $request->no_of_seat;
        $ticket->price = $request->price;
        $ticket->publication_status = $request->publication_status;

        $ticket->save();

        return $this->manageTicket($request->id);

    }

    public function addTicket($id){

        $movies=Movie::where('id',$id)->first();
        $halls=Moviehall::where('publication_status', 1)->get();
        $shifts=TicketShift::where('publication_status', 1)->get();


        return view('admin.ticket.add-ticket',[
            'movies'=>$movies,
            'halls'=>$halls,
            'shifts'=>$shifts,


        ]);

    }

    public function manageTicket($id){
        //return $id;
        $movies=Movie::where('id',$id)->first();

        $tickets_details=Ticket::where('movie_name',$movies->movie_name)->get();



        return view('admin.ticket.manage-ticket',[
            'movies'=>$movies,
            'tickets_details'=>$tickets_details
        ]);
    }
    public function editTicketInfo($id){
        $ticketById = Ticket::find($id);
        $movies=Movie::where('movie_name',$ticketById->movie_name)->first();
        $halls=Moviehall::where('publication_status', 1)->get();
        $shifts=TicketShift::where('publication_status', 1)->get();

        return view('admin.ticket.edit-ticket', [
            'ticketById'=>$ticketById,
            'movies'=>$movies,
            'halls'=>$halls,
            'shifts'=>$shifts,

        ]);
    }

    public function updateTicketInfo(Request $request){


        $ticket=Ticket::find($request->id);
        $ticket->movie_name = $request->movie_name;
        $ticket->hall_name = $request->hall_name;
        $ticket->date = $request->date;
        $ticket->time = $request->time;
        $ticket->available_ticket = $request->available_ticket;
        $ticket->no_of_seat = $request->no_of_seat;
        $ticket->price = $request->price;
        $ticket->publication_status = $request->publication_status;

        $ticket->save();

        return view('admin.ticket.update-ticket');
    }

    public function deleteTicketInfo($id){
        $ticketById = Ticket::find($id);

        $ticketById->delete();

        return view('admin.ticket.delete-ticket');
    }

    public function bookTicket1($id){

        $movies=Movie::where('id',$id)->first();
        $movie_tickets=Ticket::where('movie_name',$movies->movie_name)->get();


        return view('front.ticket.book-ticket1',[
            'movies'=>$movies,
            'movie_tickets'=>$movie_tickets
        ]);
    }










}
