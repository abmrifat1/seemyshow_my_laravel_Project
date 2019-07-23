<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\Shipping;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showOrderInfo(){

        $orders=Order::all();
        $orders=DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_status','payments.payment_type')
            ->orderBy('id','desc')
            ->get();


        return view('admin.order.show-order',['orders'=>$orders]);

    }

    public function viewOrderDetails($id){

        $order=Order::find($id);
        $customer=Customer::find($order->customer_id);
        $shipping=Shipping::find($order->shipping_id);
        $payment=Payment::where('order_id',$order->id)->first();

        $ticket=OrderDetails::where('order_id',$id)->first();

        return view('admin.order.view-order',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'ticket'=>$ticket,
            'payment'=>$payment

        ]);
    }

    public function viewOrderInvoice($id){
        $order=Order::find($id);
        $customer=Customer::find($order->customer_id);
        $shipping=Shipping::find($order->shipping_id);
        $payment=Payment::where('order_id',$order->id)->first();
        $ticket=OrderDetails::where('order_id',$id)->first();


        return view('admin.order.show-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'ticket'=>$ticket,
            'payment'=>$payment,
            'order'=>$order

        ]);

    }

    public function myPdf(){

        $pdf=PDF::loadView('pdf');
        return $pdf->stream('demo.pdf');
    }

    public function downloadOrderInvoice($id){
        $order=Order::find($id);
        $customer=Customer::find($order->customer_id);
        $shipping=Shipping::find($order->shipping_id);
        $payment=Payment::where('order_id',$order->id)->first();
        $ticket=OrderDetails::where('order_id',$id)->first();

        $pdf=PDF::loadView('admin.order.download-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'ticket'=>$ticket,
            'payment'=>$payment,
            'order'=>$order

        ]);
        return $pdf->stream('0000'.$ticket->order_id.$ticket->show_id.'pdf');
    }

    public function editOrderDetails($id){

        $paymentById = Payment::where('order_id',$id)->first();
        $orderById = Order::where('id',$paymentById->order_id)->first();


        return view('admin.order.edit-order', ['orderById'=>$orderById,'paymentById'=>$paymentById]);
    }

    public function updateOrderDetails(Request $request){

        $paymentById =Payment::find($request->id);
        $orderById =Order::find($request->order_id);
        $orderById->order_status = $request->order_status;
        $paymentById->payment_status = $request->payment_status;

        $orderById->save();
        $paymentById->save();

        return redirect('/order_info')->with('message', 'Customer Order status info update successfully');
    }
    public function deleteOrdedetails($id){
             $orderById =Payment::where('order_id',$id)->first();
        $orderById->delete();

        return redirect('/order_info')->with('message', 'Customer Order info Delete successfully');
    }
}
