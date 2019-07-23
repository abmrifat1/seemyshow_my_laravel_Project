<?php

namespace App\Http\Controllers;

use App\Movie;
use App\OrderDetails;
use App\ShowCart;
use Illuminate\Support\Facades\DB;
use App\Ticket;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public  function hallTicketInfo(Request $request){


        $ticket_movies=Ticket::where('movie_name',$request->movie_name)
            ->where('hall_name',$request->hall_name)
            ->get();



//        Cart::add([
//            'id'=>$ticket->id,
//            'name'=>$ticket->movie_name,
//            'price'=>$ticket->price,
//            'qty'=>$request->ticket,
//            'options' => ['hall_name' => $ticket->hall_name,'date'=>$request->ticket_date,'time'=>$request->time]
//        ]);

      return view('front.ticket.book-ticket2',['ticket_movies'=>$ticket_movies]);




    }

    public function dateTicketInfo(Request $request){
        $date_movies=Ticket::where('movie_name',$request->movie_name)
            ->where('hall_name',$request->hall_name)
            ->where('date',$request->date)
            ->get();

        return view('front.ticket.book-ticket3',['date_movies'=>$date_movies]);

    }

    public function sloteTicketInfo(Request $request){


        $slote_movies=Ticket::where('movie_name',$request->movie_name)
            ->where('hall_name',$request->hall_name)
            ->where('date',$request->date)
            ->where('time',$request->time)
            ->get();


     return view('front.ticket.book-ticket4',['slote_movies'=>$slote_movies]);
    }

    public function seatTicketInfo(Request $request){

        $seat_movie=Ticket::where('movie_name',$request->movie_name)
            ->where('hall_name',$request->hall_name)
            ->where('date',$request->date)
            ->where('time',$request->time)
            ->where('seat',$request->seat)
            ->first();


        return view('front.ticket.book-ticket5',['seat_movie'=>$seat_movie]);

    }

    public function finalTicketInfo(Request $request){


        $final_ticket=Ticket::where('id',$request->id)->first();
        $quantity=$request->ticket_number;


       // $booking_tickets=OrderDetails::where('show_id',$final_ticket->id)->get();

        $booking_tickets=DB::table('order_details')
            ->join('tickets','order_details.show_id','=','tickets.id')
            ->join('customers','order_details.customer_id','=','customers.id')
            ->select('tickets.*','customers.*','order_details.*')
            ->where('order_details.show_id',$final_ticket->id)
            ->get();

      //  $booking_tickets=OrderDetails::where('show_id',$final_ticket->id)->get();







//        $cart=new ShowCart();
//
//        $cart->ticket_id=$request->id;
//        $cart->show_name=$final_ticket->movie_name;
//        $cart->show_place=$final_ticket->hall_name;
//        $cart->date=$final_ticket->date;
//        $cart->time=$final_ticket->time;
//        $cart->seat=$final_ticket->seat;
//        $cart->price=$final_ticket->price;
//        $cart->quantity=$request->ticket_number;
//        $cart->save();

        return view('front.ticket.seat-book',[
            'final_ticket'=>$final_ticket,
            'quantity'=>$quantity,
            'booking_tickets'=>$booking_tickets
        ]);

//        return view('front.cart.show-cart',[
//            'final_ticket'=>$final_ticket,
//            'quantity'=>$quantity
//        ]);
    }

//    public function showCart(){
//
//
//
//        return view('front.cart.show-cart',['cartTickets'=>$cartTickets]);
//    }
//     public function updateCart(Request $request){
//        Cart::update($request->rowId, $request->qty);
//        return redirect('/show-cart')->with('message','cart info update successfully');
//     }
//
//     public function deleteCart($id){
//        Cart::remove($id);
//
//         return redirect('/show-cart')->with('message','cart info delete successfully');
//
//     }

public function sitInfo(){
//    return view('front.cart.show-cart',[
//           'final_ticket'=>$final_ticket,
//           'quantity'=>$quantity
//       ]);
        return view('front.ticket.seat-book');
}

    public function finalTicketInfoFoo(Request $request)
    {
        $seat_movie=Ticket::where('movie_name',$request->movie_name)
            ->where('hall_name',$request->hall_name)
            ->where('date',$request->date)
            ->where('time',$request->time)
            ->first();

        return view('front.ticket.book-ticket5',['seat_movie'=>$seat_movie]);
    }

}
