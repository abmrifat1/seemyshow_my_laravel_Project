<?php

namespace App\Http\Controllers;

use App\TicketShift;
use Illuminate\Http\Request;

class TicketShiftController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addShift(){
        return view('admin.shift.add-shift');
    }

    public function saveShift(Request $request)
    {


        $shift = new TicketShift();

        $shift->shift_time = $request->shift_time;
        $shift->shift_description = $request->shift_description;
        $shift->publication_status = $request->publication_status;

        $shift->save();

        return redirect('/add-shift')->with('message', 'Ticket Shift info save successfully');
    }
    public function manageShiftInfo(){
        $allSifts = TicketShift::all();
        return view('admin.shift.manage-shift', ['allSifts'=>$allSifts]);
    }

    public function unpublishedShiftInfo($id){
        $shiftById = TicketShift::find($id);
        $shiftById->publication_status = 0;
        $shiftById->save();
        return redirect('/manage-shift')->with('message', 'Ticket Shift info unpublished successfully');
    }
    public function publishedShiftInfo($id){
        $shiftById = TicketShift::find($id);
        $shiftById->publication_status = 1;
        $shiftById->save();
        return redirect('/manage-shift')->with('message', 'Ticket Shift info published successfully');
    }
    public function editShiftInfo($id){
        $shiftById = TicketShift::find($id);
        return view('admin.shift.edit-shift', ['shiftById'=>$shiftById]);
    }
    public function updateShiftInfo(Request $request){

        $shiftById =TicketShift::find($request->id);
        $shiftById->shift_time = $request->shift_time;
        $shiftById->shift_description = $request->shift_description;
        $shiftById->publication_status = $request->publication_status;

        $shiftById->save();
        return redirect('/manage-shift')->with('message', 'Ticket Shift  info update successfully');


    }

    public function deleteShiftInfo($id){
        $shiftById =TicketShift::find($id);
        $shiftById->delete();

        return redirect('/manage-shift')->with('message', 'Ticket Shift  info Delete successfully');


    }
}
