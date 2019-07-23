@extends('front.master')
@section('title')
    News
@endsection

@section('content')



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->

    <section class="container">
        <div class="overflow-wrapper">
            <div class="col-sm-12">

                <h2 class="page-heading">News</h2>

                <!-- News post article-->
                @foreach($allNews as $News)

                <article class="post post--news">
                    <a href='{{url('/single-news/'.$News->id)}}' class="post__image-link">
                        <img alt='' src="{{asset($News->author_image)}}">
                    </a>

                    <h1><a href="{{url('/single-news/'.$News->id)}}" class="post__title-link">{{$News->news_title}}</a></h1>
                    <p class="post__date">{{$News->created_at}}</p>

                    <div class="wave-devider"></div>

                    <p class="post__text">{{$News->news_description}}</p>


                    <div class="devider-huge"></div>
                </article>


                @endforeach
                <!-- end news post article-->







            </div>
        </div>
    </section>

    <div class="clearfix"></div>
@endsection