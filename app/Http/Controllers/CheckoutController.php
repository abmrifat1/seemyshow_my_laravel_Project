<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Customer;
use App\Mail\ConfirmMail;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\Shipping;
use App\Ticket;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\AssignOp\ShiftLeft;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('/front.checkout.checkout-content');
    }

    public function saveCustomerInfo(Request $request){
        $this->validate($request,[
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required|string|min:6|max:30|confirmed',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required',
        ]);
        $request['verification_code'] = rand(100000,999999);
        Mail::to($request->email)->send(new ConfirmMail($request));
        $customer=new Customer();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->email=$request->email;
        $customer->verification_code=$request->verification_code;
        $customer->password=bcrypt($request->password);
        $customer->phone_number=$request->phone_number;
        $customer->address=$request->address;


        $customer->save();
        /*$customerId=$customer->id;

        Session::put('customerId',$customerId);
        Session::put('customerName',$request->first_name.' '.$request->last_name);

        */
        return redirect('/verify_customer')->with('message','Please go your email and verify your account');
    }

    public function showShippingInfo(){
        $customerId=Session::get('customerId');
        $customer=Customer::find($customerId);
        return view('front.checkout.shipping-info',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){

        $this->validate($request,[
            'full_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'email',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
        ]);

        $shipping=new Shipping();
        $shipping->full_name=$request->full_name;
        $shipping->email=$request->email;
        $shipping->phone_number=$request->phone_number;
        $shipping->address=$request->address;
        $shipping->save();

        $shippingId=$shipping->id;
        Session::put('shippingId',$shippingId);

        return redirect('/payment-info');
    }

    public function showPaymentInfo(){
        return view('front.checkout.payment-content');
    }


    public function customerLogin(Request $request){

  $customer=Customer::where('email',$request->user_email)->first();

        if($customer) {
            if($customer->is_email_verified === 'Yes') {
                if (password_verify($request->user_password, $customer->password)) {

                    Session::put('customerId', $customer->id);
                    Session::put('customerName', $customer->first_name . ' ' . $customer->last_name);

                    return redirect('/shipping-info');
                } else {

                    return redirect('/checkout')->with('message', 'Invalid  password');
                }
            }else{
                return redirect('/checkout')->with('message', 'You are not verified.');
            }
        } else{
            return redirect('/checkout')->with('message', 'Invalid  email');
        }
        }





        public function homeCustomerLogin(Request $request){

            $customer=Customer::where('email',$request->user_email)->first();

            if($customer) {
                if($customer->is_email_verified === 'Yes') {
                    if (password_verify($request->user_password, $customer->password)) {

                        Session::put('customerId', $customer->id);
                        Session::put('customerName', $customer->first_name . ' ' . $customer->last_name);

                        return redirect('/');
                    } else {

                        return redirect('/home-new-customer')->with('message', 'Invalid  password');
                    }
                }
                else{
                    return redirect('/home-new-customer')->with('message', 'You are not verified.');
                }
            } else{
                return redirect('/home-new-customer')->with('message', 'Invalid  mail');
            }
        }

    public function homeNewCustomer(){
        return view('front.customer.customer-login');
    }

        public function saveHomeCustomerInfo(Request $request){
            $this->validate($request,[
                'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
                'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
                'email'=>'required|email|unique:customers,email',
                'password'=>'required|string|min:6|max:30|confirmed',
                'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
                'address'=>'required',
            ]);

            $request['verification_code'] = rand(100000,999999);
            Mail::to($request->email)->send(new ConfirmMail($request));
            $customer=new Customer();
            $customer->first_name=$request->first_name;
            $customer->last_name=$request->last_name;
            $customer->email=$request->email;
            $customer->password=bcrypt($request->password);
            $customer->verification_code=$request->verification_code;
            $customer->phone_number=$request->phone_number;
            $customer->address=$request->address;


            $customer->save();
//            $customerId=$customer->id;
//
//            Session::put('customerId',$customerId);
//            Session::put('customerName',$request->first_name.' '.$request->last_name);

            return redirect('/verify_customer')->with('message','Please go your email and verify your account');

        }

        public function saveCaskOrderInfo(Request $request){



            $order=new Order();
            $order->customer_id=Session::get('customerId');
            $order->shipping_id=Session::get('shippingId');
            $order->order_total=Session::get('grandTotal');
            $order->save();

            $orderId=$order->id;
            $payment=new Payment();
            $payment->order_id=$orderId;
            $payment->payment_type='Cash';
            $payment->save();
            $ticketId=Session::get('tiketId');
            $ticket=Ticket::where('id',$ticketId)->first();


              $ticketId=Session::get('tiketId');

              $ticket=Ticket::where('id',$ticketId)->first();



                $orderDetail=new OrderDetails();
                $orderDetail->order_id=$orderId;
                $orderDetail->show_id=$ticket->id;
                $orderDetail->customer_id=Session::get('customerId');
                $orderDetail->name=$ticket->movie_name;
                $orderDetail->place=$ticket->hall_name;
                $orderDetail->date=$ticket->date;
                $orderDetail->time=$ticket->time;
                $orderDetail->seat_number=Session::get('number');
                $orderDetail->price=$ticket->price;
                $orderDetail->quantity=Session::get('quantity');
                $orderDetail->save();

                $new_available=$ticket->available_ticket- $orderDetail->quantity;


                $ticket_new=Ticket::where('id',$ticket->id)->update(['available_ticket'=>$new_available]);



               return view('front.ticket.customer-ticket',[
                   'ticketId'=>$ticketId,
                   'orderId'=>$orderId,
                   'ticket'=>$ticket,
                   'orderDetail'=>$orderDetail

               ]);
        }

        public function saveBkashOrderInfo(Request $request){

            $order=new Order();
            $order->customer_id=Session::get('customerId');
            $order->shipping_id=Session::get('shippingId');
            $order->order_total=Session::get('grandTotal');
            $order->save();

            $orderId=$order->id;
            $payment=new Payment();
            $payment->order_id=$orderId;
            $payment->payment_type='BKash';
            $payment->save();
            $ticketId=Session::get('tiketId');
            $ticket=Ticket::where('id',$ticketId)->first();


            $ticketId=Session::get('tiketId');

            $ticket=Ticket::where('id',$ticketId)->first();



            $orderDetail=new OrderDetails();
            $orderDetail->order_id=$orderId;
            $orderDetail->show_id=$ticket->id;
            $orderDetail->customer_id=Session::get('customerId');
            $orderDetail->name=$ticket->movie_name;
            $orderDetail->place=$ticket->hall_name;
            $orderDetail->date=$ticket->date;
            $orderDetail->time=$ticket->time;
            $orderDetail->seat_number=Session::get('number');
            $orderDetail->price=$ticket->price;
            $orderDetail->quantity=Session::get('quantity');
            $orderDetail->save();





            return view('front.ticket.customer-bkash-ticket',[
                'ticketId'=>$ticketId,
                'orderId'=>$orderId,
                'ticket'=>$ticket,
                'orderDetail'=>$orderDetail

            ]);

        }
        public function saveBkashId(Request $request){

            $ticket=Ticket::where('id',$request->ticket_id)->first();
            $new_available=$ticket->available_ticket - Session::get('quantity');

            $ticket_new=Ticket::where('id',$ticket->id)->update(['available_ticket'=>$new_available]);

            $bkash=new Bkash();
            $bkash->order_id=$request->order_id;
            $bkash->ticket_id=$request->ticket_id;
            $bkash->phone_no=$request->phone_number;
            $bkash->t_id=$request->tid;

            $bkash->save();



            return redirect('/');
        }

        public function cancelTicket(){
            Session::forget('grandTotal');
            Session::forget('quantity');
            Session::forget('tiketId');
            Session::forget('customerId');
            Session::forget('customerName');
            Session::forget('customerId');
            Session::forget('number');



            return redirect('/');
        }

    public function CustomerLogout(){

        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('shippingId');
        Session::forget('grandTotal');
        Session::forget('quantity');
        Session::forget('tiketId');

        return redirect('/');
    }

    public function ticketNumber(Request $request){

        if($request->sit){
            $final_ticket=Ticket::where('id',$request->final_ticket)->first();
            $quantity=$request->ticket_number;


            $arr = $request->sit;
            $arr2 = array_slice($arr, 0, $quantity);
            $properties = array_keys($arr2);
            $seat_number=implode(',',$properties);



            return view('front.cart.show-cart',[
                'final_ticket'=>$final_ticket,
                'seat_number'=>$seat_number,
                'quantity'=>$quantity
            ]);

        }
        else{
            return "please select seat number";
        }






    }


    public function verifyCustomerInfo(){
        return view('front.checkout.confirm-page');
    }

}
