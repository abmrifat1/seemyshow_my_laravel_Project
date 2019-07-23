@extends('front.master')
@section('title')
    Single Show Place
@endsection

@section('content')



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->

    <section class="cinema-container">


        <div class="cinema cinema--full">
            <p class="cinema__title">{{$hall_details->hall_name}}</p>
            <div class="cinema__gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--First Slide-->

                        <img alt='' style="text-align: center;height: 400px;width: 750px" src="{{asset($hall_details->hall_image)}}">

                    </div>
                </div>
            </div>
            <div class="cinema__info">
                <p class="cinema__info-item"><strong>Address:</strong> {{$hall_details->hall_address}}</p>
                <p class="cinema__info-item"><strong>Phone:</strong> {{$hall_details->hall_phone}}</p>
                <p class="cinema__info-item"><strong>Official website:</strong> <a href="#">{{$hall_details->hall_website}}</a></p>
            </div>
        </div>

        



        <div class="tabs tabs--horisontal">
            <!-- Nav tabs -->
            {{--<div class="container">--}}
                {{--<ul class="nav nav-tabs" id="hTab">--}}
                    {{--<li ><a href="#movie1" data-toggle="tab">Movies</a></li>--}}
                    {{--<li ><a href="#comment1" data-toggle="tab">Comments</a></li>--}}
                    {{--<li class="active"><a href="#map1" data-toggle="tab">Loading</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            <!-- Tab panes -->
            <div class="">
                <div>
                    <div class="container">
                        <div class="movie-time-wrap movie--test--right">

                            {{--<div class="datepicker">--}}
                                {{--<span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>--}}
                                {{--<input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">--}}
                            {{--</div>--}}

                            <div class="clearfix"></div>
                            <h2>Running movie in {{$hall_details->hall_name}} hall</h2>

                            @foreach($movies->unique('movie_name') as $movie)
                            <div class="col-sm-6">

                                <!-- Movie variant with time -->
                                <div class="movie movie--time">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="movie__images">
                                                <a href='{{url('/single-movie/'.$movie->id)}}'>
                                                    <img  src="{{asset($movie->movie_image)}}">
                                                </a>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-7" style="padding-bottom: 10px;border-bottom:1px solid red;text-align: left">
                                            <a href='{{url('/single-movie/'.$movie->id)}}' class="movie__title">{{$movie->movie_name}} </a><br/>

                                            <p class="movie__time">Release Date : {{$movie->duration}}</p><br/>

                                            <p class="movie__option">Country : {{$movie->country_name}}</p><br/>
                                            <p class="movie__option">Year : {{$movie->year}}</p><br/>

                                            <p class="movie__option">Director : {{$movie->director}}</p>
                                            <p class="movie__option" >Actor : {{$movie->actor}}</p>
                                            <a href="{{url('/book-ticket1/'.$movie->id)}}" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this movie</span></a>

                                        </div>


                                    </div>
                                </div>
                                <!-- Movie variant with time -->
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
                {{--<div class="tab-pane" id="comment1">--}}
                    {{--<div class="container">--}}
                        {{--<div class="comment-wrapper">--}}
                            {{--<form id="comment-form" class="comment-form" method='post'>--}}
                                {{--<textarea class="comment-form__text" placeholder='Add you comment here'></textarea>--}}
                                {{--<label class="comment-form__info">250 characters left</label>--}}
                                {{--<button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>--}}
                            {{--</form>--}}

                            {{--<div class="comment-sets comment--light">--}}

                                {{--<div class="comment">--}}
                                    {{--<div class="comment__images">--}}
                                        {{--<img alt='' src="{{asset('/front/')}}/images/comment/avatar.jpg">--}}
                                    {{--</div>--}}

                                    {{--<a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>--}}
                                    {{--<p class="comment__date">today | 03:04</p>--}}
                                    {{--<p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>--}}
                                    {{--<a href='#' class="comment__reply">Reply</a>--}}
                                {{--</div>--}}

                               {{----}}

                                {{--<div class="comment-more">--}}
                                    {{--<a href="#" class="watchlist">Show more comments</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>

    </section>




    <div class="clearfix"></div>
@endsection