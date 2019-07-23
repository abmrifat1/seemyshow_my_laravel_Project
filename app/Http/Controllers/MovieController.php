<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use App\Moviehall;
use App\Showing;
use App\Ticket;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addMovie(){
        $categories = Category::where('publication_status', 1)->get();
        $showings = Showing::where('publication_status', 1)->get();

        return view('admin.movie.add-movie', [
            'categories'=>$categories,
            'showings'=>$showings,
        ]);

    }
    public function saveMovieInfo(Request $request){


        $movieImage = $request->file('movie_image');
        $imageName = $movieImage->getClientOriginalName();
        $directory = 'images/movie/';
        $imgUrl = $directory.$imageName;
        Image::make($movieImage)->resize(380,600)->save($imgUrl);



        $movie=new Movie();
        $movie->movie_name = $request->movie_name;
        $movie->category_id = $request->category_id;
        $movie->show_status = $request->show_status;
        $movie->country_name = $request->country_name;
        $movie->year = $request->year;
        $movie->duration = $request->duration;
        $movie->director = $request->director;
        $movie->actor = $request->actor;
        $movie->trailer_link = $request->trailer_link;
        $movie->movie_description = $request->movie_description;
        $movie->movie_hall_id =$request->movie_hall_id;
        $movie->movie_image = $imgUrl;
        $movie->publication_status = $request->publication_status;


        $movie->save();

        return redirect('/add-movie')->with('message', 'Movie info save successfully');
    }

    public function manageMovieInfo(){


        $movies=DB::table('movies')
            ->join('categories','movies.category_id','=','categories.id')
            ->join('showings','movies.show_status','=','showings.id')
            ->select('categories.*','showings.*','movies.*')
            ->get();



        return view('admin.movie.show-movie',['movies'=>$movies]);



    }
    public function unpublishMovieInfo($id){
        $showById = Movie::find($id);

        $showById->publication_status = 0;
        $showById->save();
        return redirect('/manage-movie')->with('message', 'Show info unpublished successfully');
    }
    public function publishedMovieInfo($id) {
        $showById = Movie::find($id);

        $showById->publication_status = 1;
        $showById->save();
        return redirect('/manage-movie')->with('message', 'Show info published successfully');
    }
    public function editShowInfo($id) {
        //$categoryById = Category::where('id', $id)->first();

        $movieById = Movie::find($id);
        $normal_categories=Category::where('publication_status',1)->get();
        $Showing_categories=Showing::where('publication_status',1)->get();
        return view('admin.movie.edit-movie', [
            'movieById'=>$movieById,
            'normal_categories'=>$normal_categories,
            'Showing_categories'=>$Showing_categories
        ]);
    }

    public function updateShowInfo(Request $request) {


        $movie_image=$request->file('movie_image');
        if($movie_image){
            $movie=Movie::find($request->id);
            unlink($movie->movie_image);

            $movieImage=$request->file('movie_image');
            $imageName=$movie_image->getClientOriginalName();
            $directory='images/movie/';
            $imageUrl=$directory.$imageName;
            Image::make($movieImage)->resize(380,600)->save($imageUrl);


            $movie->movie_name = $request->movie_name;
            $movie->category_id = $request->category_id;
            $movie->show_status = $request->show_status;
            $movie->country_name = $request->country_name;
            $movie->year = $request->year;
            $movie->duration = $request->duration;
            $movie->director = $request->director;
            $movie->actor = $request->actor;
            $movie->trailer_link = $request->trailer_link;
            $movie->movie_description = $request->movie_description;
            $movie->movie_hall_id =$request->movie_hall_id;
            $movie->movie_image = $imageUrl;
            $movie->publication_status = $request->publication_status;
            $movie->save();
        }
        else{
            $movie=Movie::find($request->id);

            $movie->movie_name = $request->movie_name;
            $movie->category_id = $request->category_id;
            $movie->show_status = $request->show_status;
            $movie->country_name = $request->country_name;
            $movie->year = $request->year;
            $movie->duration = $request->duration;
            $movie->director = $request->director;
            $movie->actor = $request->actor;
            $movie->trailer_link = $request->trailer_link;
            $movie->movie_description = $request->movie_description;
            $movie->movie_hall_id =$request->movie_hall_id;
            $movie->publication_status = $request->publication_status;
            $movie->save();

        }

        return redirect('/manage-movie')->with('message','Show Info Update Successfully');
    }
    public function deleteShowInfo($id) {
        $movieById = Movie::find($id);
        unlink($movieById->movie_image);
        $movieById->delete();

        return redirect('/manage-movie')->with('message', 'SHow info delete successfully');
    }



}






















