<?php

namespace App\Http\Controllers;

use App\Stadium;
use Image;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function addStadium(){
        return view('admin.stadium.add-stadium');
    }
    public function saveStadium(Request $request){
        $this->validate($request,[
            'stadium_name' => 'required|min:5|max:30',
            'Stadium_address' => 'required|min:5|max:50',
            'stadium_phone' => 'required|min:5|max:50',
            'stadium_website' => 'required|min:5|max:50',
            'stadium_image' => 'required',
            'stadium_description' => 'required',
            'publication_status' => 'required'
        ]);



        $stadiumImage = $request->file('stadium_image');
        $stadiumName = $stadiumImage->getClientOriginalName();
        $directory = 'images/stadium/';
        $imgUrl = $directory.$stadiumName;
        Image::make($stadiumImage)->resize(300,300)->save($imgUrl);


        $stadium = new Stadium();
        $stadium->stadium_name = $request->stadium_name;
        $stadium->Stadium_address = $request->Stadium_address;
        $stadium->stadium_phone = $request->stadium_phone;
        $stadium->stadium_website = $request->stadium_website;
        $stadium->stadium_image = $imgUrl;
        $stadium->stadium_description = $request->stadium_description;
        $stadium->publication_status = $request->publication_status;
        $stadium->save();

        return redirect('/add-stadium')->with('message', 'Stadium info save successfully');
    }

    public function singleStadium($id){
        $stadium_details=Stadium::where('id',$id)->first();

        return view('front.stadium.single-stadium',['stadium_details'=>$stadium_details]);
    }
}
