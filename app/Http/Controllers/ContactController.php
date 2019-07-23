<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Moviehall;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function saveCustomerSms(Request $request){

        $contact=new Contact();
        $contact->user_name=$request->user_name;
        $contact->user_email=$request->user_email;
        $contact->message=$request->message;

        $contact->save();

        return redirect('/contact-us')->with('message', 'Thank You For Your Message. We Will give answer soon');
    }

    public function manageCustomerSms(){
        $customer_messages=Contact::all();
        return view('admin.contact.manage-contact',['customer_messages'=>$customer_messages]);
    }

    public function editCustomerSms($id){
        $smsById = Contact::find($id);
        return view('admin.contact.edit-contact', ['smsById'=>$smsById]);
    }

    public function updateCustomerSms(Request $request){
        $smsById =Contact::find($request->id);
        $smsById->status = $request->status;


        $smsById->save();
        return redirect('/manage-message')->with('message', 'Customer sms status info update successfully');
    }
    public function deleteCustomerSms($id){
        $smsById =Contact::find($id);
        $smsById->delete();

        return redirect('/manage-message')->with('message', 'Customer sms status info Delete successfully');
    }

    public function showCustomerInfo(){

    }

}
