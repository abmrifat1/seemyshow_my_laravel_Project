<?php

namespace App\Http\Controllers;

use App\Showing;
use Illuminate\Http\Request;

class ShowingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addShowing() {
        return view('admin.showing.add-showing');
    }

    public function saveShowingInfo(Request $request){

        $showing = new Showing();

        $showing->status_name = $request->status_name;
        $showing->status_description = $request->status_description;
        $showing->publication_status = $request->publication_status;
        $showing->save();

        return redirect('/add-showing')->with('message', 'Showing Status info save successfully');
}

public function manageShowingInfo(){
    $allShowings = Showing::all();
    return view('admin.showing.manage-showing', ['allShowings'=>$allShowings]);
}
    public function unpublishedShowingInfo($id){
        $showingById = Showing::find($id);
        $showingById->publication_status = 0;
        $showingById->save();
        return redirect('/manage-showing')->with('message', 'Showing Status info unpublished successfully');
    }
    public function publishedShowingInfo($id){
        $showingById = Showing::find($id);
        $showingById->publication_status = 1;
        $showingById->save();
        return redirect('/manage-showing')->with('message', 'Showing Status info published successfully');
    }

}
