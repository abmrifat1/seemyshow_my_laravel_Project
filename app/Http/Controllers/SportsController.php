<?php

namespace App\Http\Controllers;

use App\Sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addSports(){
        return view('admin.sport.add-sport');
    }
    public function saveSports(Request $request){
        $sport = new Sports();

        $sport->place_category_name = $request->place_category_name;
        $sport->description = $request->description;
        $sport->publication_status = $request->publication_status;
        $sport->save();

        return redirect('/add-sport')->with('message', 'Sports info save successfully');
    }
    public function manageSports() {
        $allsports = Sports::all();
        return view('admin.sport.manage-sport', ['allsports'=>$allsports]);
    }
    public function unpublishedSportInfo($id) {
        $sportById = Sports::find($id);
        $sportById->publication_status = 0;
        $sportById->save();
        return redirect('/manage-sport')->with('message', 'Place Category info unpublished successfully');
    }
    public function publishedSportInfo($id) {
        $sportById = Sports::find($id);
        $sportById->publication_status = 1;
        $sportById->save();
        return redirect('/manage-sport')->with('message', 'Place Category info published successfully');
    }
    public function editSportInfo($id) {

        $sportById = Sports::find($id);
        return view('admin.sport.edit-sport', ['sportById'=>$sportById]);
    }

    public function updateSportInfo(Request $request) {

        $sportById = Sports::find($request->id);
        $sportById->place_category_name = $request->place_category_name;
        $sportById->description = $request->description;
        $sportById->publication_status = $request->publication_status;
        $sportById->save();

        return redirect('/manage-sport')->with('message', 'Place Category info update successfully');
    }
    public function deleteSportInfo($id) {
        $sportById = Sports::find($id);
        $sportById->delete();

        return redirect('/manage-sport')->with('message', 'Place Category info delete successfully');
    }
}
