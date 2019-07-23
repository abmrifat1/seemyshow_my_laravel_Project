<?php

namespace App\Http\Controllers;

use App\Bkash;
use Illuminate\Http\Request;

class BkashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewBkash(){
        $bkashs=Bkash::all();

        return view('admin.bkash.view-bkash',['bkashs'=>$bkashs]);
    }

    public function deleteBkash($id){
        $bkashById =Bkash::find($id);
        $bkashById->delete();

        return redirect('/view-bkash')->with('message', 'Bkash  info Delete successfully');
    }
}
