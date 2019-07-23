<?php

namespace App\Http\Controllers;

use App\Match;
use App\Showing;
use App\Sports;
use App\Stadium;
use Image;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function addmatch(){
        $categories =Sports::where('publication_status', 1)->get();
        $stadiums =Stadium::where('publication_status', 1)->get();
        $statuses =Showing::where('publication_status', 1)->get();

        return view('admin.match.add-match', [
            'categories'=>$categories,
            'stadiums'=>$stadiums,
            'statuses'=>$statuses
        ]);


    }

    public function saveMatchInfo(Request $request){

        $matchImage = $request->file('match_image');
        $imageName = $matchImage->getClientOriginalName();
        $directory = 'images/match/';
        $imgUrl = $directory.$imageName;
        Image::make($matchImage)->resize(300,200)->save($imgUrl);



        $match=new Match();
        $match->match_name = $request->match_name;
        $match->category_name = $request->category_name;
        $match->match_status = $request->match_status;
        $match->stadium_name = $request->stadium_name;
        $match->team = $request->team;
        $match->date = $request->date;
        $match->time = $request->time;
        $match->ticket = $request->ticket;
        $match->sponsor = $request->sponsor;
        $match->description = $request->description;
        $match->ticket_status =implode(",",$request->ticket_status);
        $match->match_image = $imgUrl;
        $match->publication_status = $request->publication_status;


        $match->save();

        return redirect('/add-match')->with('message', 'Live Match Info info save successfully');
    }

    public function singleConcert(){
        $categoriesSports=Match::where('category_name',3)->where('publication_status',1)->orderby('id','desc')->take(3)->get();
        return view('front.sports.sports-list',['categoriesSports'=>$categoriesSports]);

    }
}
