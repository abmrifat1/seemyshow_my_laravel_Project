<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Customer;
use App\OrderDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
   public function showCustomerInfo(){
       $customers=Customer::all();

       return view('admin.customer.show-customer',['customers'=>$customers]);

   }
   public function deleteCustomerInfo($id){
       $customerById =Customer::find($id);
       $customerById->delete();

       return redirect('/show-customer')->with('message', 'Customer info Delete successfully');
   }
   public function verify($verification_code)
   {
       $customer = Customer::where('verification_code',$verification_code)->first();
       if($customer !== null){
           if($customer->is_email_verified !== 'Yes'){

               DB::table('customers')->where('id',$customer->id)->update(['is_email_verified'=>'Yes']);
               Session::put('customerId', $customer->id);
               Session::put('customerName', $customer->first_name .' '. $customer->last_name);

               return redirect('/shipping-info');
           }else{
               return redirect('/shipping-info')->with('message',"You are already verified, please login");
           }
       }
   }

   public function verifyNew($verification_code){

       $customer = Customer::where('verification_code',$verification_code)->first();
       if($customer !== null){
           if($customer->is_email_verified !== 'Yes'){

               DB::table('customers')->where('id',$customer->id)->update(['is_email_verified'=>'Yes']);
               Session::put('customerId', $customer->id);
               Session::put('customerName', $customer->first_name .' '. $customer->last_name);

               return redirect('/');
           }else{
               return redirect('/home-new-customer')->with('message',"You are already verified, please login");
           }
       }
   }

     public function profile(){

         $customer_id=Session::get('customerId');
         $customer=Customer::where('id',$customer_id)->first();

         $previousOrders=OrderDetails::where('customer_id',$customer_id)->get();

      return view('front.customer.customer-profile',[
          'customer'=>$customer,
          'previousOrders'=>$previousOrders
      ]);
     }






//   public function verifyMessage()
//   {
//       return redirect('/')->with('susccess','We have sent a link in your email, Please verify your account.');
//   }
}
