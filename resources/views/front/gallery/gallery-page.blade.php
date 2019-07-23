@extends('front.master')
@section('title')
    Gallery
@endsection

@section('content')
    <!-- Search bar -->


    <div class="container">
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">Gallery</h2>

                <div class="row">
                    <div class="gallery-wrapper">

                        @foreach($movies as $movie)
                        <div class="col-sm-4 col-md-3">
                            <div class="gallery-item">
                                <a href='{{url('/single-movie/'.$movie->id)}}' class="gallery-item__image gallery-item--photo">
                                    <img style="height: 350px;width: 320px" alt='' src="{{asset($movie->movie_image)}}">
                                </a>
                                <a href='{{url('/single-movie/'.$movie->id)}}' class="gallery-item__descript gallery-item--photo-link">
                                    <span class="gallery-item__icon"><i class="fa fa-camera"></i></span>
                                    <p class="gallery-item__name">{{$movie->movie_name}}</p>
                                </a>
                            </div>
                        </div>

                        @endforeach



       <section/>

                    </div>


        <div class="clearfix"></div>


@endsection