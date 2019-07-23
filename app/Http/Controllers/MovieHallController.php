<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Moviehall;
use App\Sports;
use App\Stadium;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class MovieHallController extends Controller
{
    public function addMovieHall() {

        $place_categories=Sports::where('publication_status',1)->get();
        return view('admin.movieHall.add-movieHall',['place_categories'=>$place_categories]);
    }

    public function saveMovieHallInfo(Request $request) {

        $this->validate($request,[
            'hall_name' => 'required',
            'place_category' => 'required',
            'hall_address' => 'required',
            'hall_phone' => 'required',
            'hall_website' => 'required',
            'hall_image' => 'required',
            'hall_description' => 'required',
            'publication_status' => 'required'
        ]);



        $hallImage = $request->file('hall_image');
        $imageName = $hallImage->getClientOriginalName();
        $directory = 'images/movie-hall/';
        $imgUrl = $directory.$imageName;
        Image::make($hallImage)->resize(300,300)->save($imgUrl);


        $movieHall = new Moviehall();
        $movieHall->hall_name = $request->hall_name;
        $movieHall->place_category = $request->place_category;
        $movieHall->hall_address = $request->hall_address;
        $movieHall->hall_phone = $request->hall_phone;
        $movieHall->hall_website = $request->hall_website;
        $movieHall->hall_image = $imgUrl;
        $movieHall->hall_description = $request->hall_description;
        $movieHall->publication_status = $request->publication_status;
        $movieHall->save();

        return redirect('/add-movie-hall')->with('message', 'Movie Hall info save successfully');
    }


    public function manageMovieHallInfo() {

        $places=DB::table('moviehalls')
            ->join('sports','moviehalls.place_category','=','sports.id')
            ->select('moviehalls.*','sports.place_category_name')
            ->get();

        return view('admin.movieHall.manage-movie-hall', ['places'=>$places]);
    }


     public function allHall(){

        $allHalls=Moviehall::where('publication_status',1)->where('place_category',4)->get();

        $allStadiums=Moviehall::where('publication_status',1)->where('place_category',5)->get();

         return view('front.cinemaHall.all-hall',['allHalls'=>$allHalls,'allStadiums'=>$allStadiums]);
     }


     public function singleHall($id){

        $movies = DB::table('movies')
            ->join('tickets','tickets.movie_name','=','movies.movie_name')
            ->join('moviehalls','moviehalls.hall_name','=','tickets.hall_name')
            ->where('moviehalls.id',$id)
            ->select('movies.*')
             ->get();


        $hall_details=Moviehall::where('id',$id)->first();


         return view('front.cinemaHall.hall-details',['hall_details'=>$hall_details,'movies'=>$movies]);
     }


    public function unpublishMovieHallInfo($id){
        $hallById=Moviehall::find($id);
        $hallById->publication_status=0;
        $hallById->save();

        return redirect('/manage-movie-hall')->with('message','Show Place Info unpublish successfully');
    }

    public function publishedMovieHallInfo($id){
        $hallById=Moviehall::find($id);
        $hallById->publication_status=1;
        $hallById->save();

        return redirect('/manage-movie-hall')->with('message','Show Place Info publish Successfully');

    }
    public function editPlaceInfo($id){
        $place=Moviehall::find($id);
        $place_categories=Sports::where('publication_status',1)->get();

        return view('admin.movieHall.edit-place',[
            'place'=>$place,
            'place_categories'=>$place_categories,
        ]);
    }
    public function updatePlaceInfo(Request $request){


        $hall_image=$request->file('hall_image');
        if($hall_image){
            $place=Moviehall::find($request->place_id);
            unlink($place->hall_image);

            $hallImage=$request->file('hall_image');
            $imageName=$hall_image->getClientOriginalName();
            $directory='images/movie-hall/';
            $imageUrl=$directory.$imageName;
            Image::make($hallImage)->resize(300,300)->save($imageUrl);


            $place->hall_name=$request->hall_name;
            $place->place_category=$request->place_category;
            $place->hall_address=$request->hall_address;
            $place->hall_phone=$request->hall_phone;
            $place->hall_website=$request->hall_website;
            $place->hall_image=$imageUrl;
            $place->hall_description=$request->hall_description;
            $place->publication_status=$request->publication_status;
            $place->save();

        }
        else{
            $place=Moviehall::find($request->place_id);

            $place->hall_name=$request->hall_name;
            $place->place_category=$request->place_category;
            $place->hall_address=$request->hall_address;
            $place->hall_phone=$request->hall_phone;
            $place->hall_website=$request->hall_website;
            $place->hall_description=$request->hall_description;
            $place->publication_status=$request->publication_status;
            $place->save();

        }

        return redirect('/manage-movie-hall')->with('message','Show Place Info Update Successfully');
    }
    public function deletePlaceInfo($id){
        $placeById=Moviehall::find($id);
        unlink($placeById->hall_image);
        $placeById->delete();
        return redirect('/manage-movie-hall')->with('message','Show Place Info Delete Successfully');
    }
}
