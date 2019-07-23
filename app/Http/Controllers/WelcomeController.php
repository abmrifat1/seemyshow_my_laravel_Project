<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Customer;
use App\Faq;
use App\Match;
use App\Movie;
use App\Moviehall;
use App\News;
use App\Offer;
use App\Showing;
use App\Sports;
use App\Stadium;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function index() {

        $movies=Movie::where('show_status',1)->where('publication_status',1)->orderby('id','desc')->take(6)->get();
        $allMovies=Movie::where('show_status',1)->where('publication_status',1)->orderby('id','asc')->take(8)->get();
        $upmovies=Movie::where('show_status',2)->where('publication_status',1)->orderby('id','desc')->take(4)->get();
        $newS=News::where('publication_status',1)->orderby('id','desc')->take(3)->get();
        $categoriesSports=Movie::where('publication_status',1)->where('category_id',8)->orderBy('id','desc')->take(2)->get();
        $best_halls=Moviehall::where('publication_status',1)->where('place_category',4)->orderby('id','desc')->take(4)->get();
        $best_stadiums=Moviehall::where('publication_status',1)->where('place_category',5)->orderby('id','desc')->take(4)->get();
        $faqs=Faq::where('publication_status',1)->get();



        return view('front.home.home-content',[
            'movies'=>$movies,
            'allMovies'=>$allMovies,
            'upmovies'=>$upmovies,
            'newS'=>$newS,
            'categoriesSports'=>$categoriesSports,
            'best_halls'=>$best_halls,
            'best_stadiums'=>$best_stadiums,
            'faqs'=>$faqs
        ]);
    }

    public function about() {
        return view('front.about.about-content');
    }
    public function category() {
        return view('front.category.category-content');
    }
    public function movieCategory($id){

        $categoriesMovies=Movie::where('show_status',$id)
            ->where('publication_status',1)
            ->orderby('id','desc')
            ->get();


        return view('front.movie.movie-list',['categoriesMovies'=>$categoriesMovies]);
    }

    public function cenemaCategory($id){
        $categoriesMovies=Movie::where('category_id',$id)
            ->where('publication_status',1)
            ->orderby('id','desc')
            ->get();

        return view('front.movie.movie-list',['categoriesMovies'=>$categoriesMovies]);
    }

    public function allCategory(){
        $categoriesMovies=Movie::where('publication_status',1)->get();
        return view('front.movie.movie-list',['categoriesMovies'=>$categoriesMovies]);
    }

    public function singleMovie($id){
        $movie_details=Movie::where('id',$id)->first();
        $movie_category=Category::where('id',$movie_details->category_id)->first();
        $movie_tickets=Ticket::where('movie_name',$movie_details->movie_name)->get();
        $show_status=Showing::where('id',$movie_details->show_status)->first();
        $comments=Comment::where('movie_id',$id)->get();



        $category_movies=Movie::where('category_id',$movie_details->category_id)
            ->where('publication_status',1)
            ->orderBy('id','desc')
            ->take(4)
            ->get();


        return view('front.movie.single-movie',[
            'movie_details'=>$movie_details,
            'movie_category'=>$movie_category,
            'category_movies'=>$category_movies,
            'movie_tickets'=>$movie_tickets,
            'show_status'=>$show_status,
            'comments'=>$comments

        ]);
    }


    public function allSports(){
        $categoriesSports=Movie::where('publication_status',1)
            ->where('category_id',8)
            ->orderBy('id','desc')
            ->take(2)
            ->get();



        return view('front.sports.sports-list',['categoriesSports'=>$categoriesSports]);
    }

    public function sportsCategory($id){
        $categoriesSports=Match::where('category_name',$id)
            ->where('publication_status',1)
            ->orderby('id','desc')
            ->get();

        return view('front.sports.sports-list',['categoriesSports'=>$categoriesSports]);
    }

    public function singleSports($id){
        $sports_details=Match::where('id',$id)->first();
        $sports_category=Sports::where('id',$sports_details->category_name)->first();

        $category_sports=Match::where('category_name',$sports_details->category_name)
            ->orderBy('id','desc')
            ->take(3)
            ->get();


        return view('front.sports.single-sports',[
            'sports_details'=>$sports_details,
            'sports_category'=>$sports_category,
            'category_sports'=>$category_sports

        ]);
    }


    public function allOffer(){

        $offers=Offer::where('publication_status',1)->get();
        return view('front.offer.offer-list',['offers'=>$offers]);
    }

    public function contactUs(){

        $customerId=Session::get('customerId');
        $customer=Customer::find($customerId);
        return view('front.contact.contact-page',['customer'=>$customer]);
    }

    public function error(){
        return view('front.error.error-page');
    }

    public function ShowGallery(){
        $movies=Movie::where('publication_status',1)->orderby('id','desc')->take(12)->get();

        return view('front.gallery.gallery-page',['movies'=>$movies]);
    }

    public function search(Request $request){

         $search=$request->search;
        $categoriesMovies = Movie::select('*')->where('movie_name', 'like',"%$search%")->take(9)->get();



        return view('front.movie.movie-list', ['categoriesMovies'=>$categoriesMovies, 'searchName'=>$request->search]);
    }


    public function customerComment(Request $request){

        $customer=Session::get('customerName');



        $comment=new Comment();

        $comment->movie_id = $request->movie_id;
        $comment->customer = $customer;
        $comment->comment = $request->comment;
        $comment->save();

        return $this->singleMovie($request->movie_id);
    }




}





