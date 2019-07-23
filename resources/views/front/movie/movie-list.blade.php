@extends('front.master')
@section('title')
    Show
@endsection

@section('content')
    <!-- Search bar -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">SeeMyShow : Movie </h2>
            </div>
        </div>
    </div>



    <!-- Main content -->
    <section class="container">
        <div class="col-sm-12">
            <h2 class="page-heading">Show</h2>



            <!-- Movie preview item -->
            @foreach($categoriesMovies as $categoriesMovie)

            <div class="movie movie--preview movie--full release">
                <div class="col-sm-3 col-md-2 col-lg-2">
                    <div class="movie__images">
                        <a href="{{url('/single-movie/'.$categoriesMovie->id)}}" class="movie-beta__link">
                             <img alt='' src="{{asset($categoriesMovie->movie_image)}}">
                        </a>
                    </div>

                </div>

                <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                    <a href='{{url('/single-movie/'.$categoriesMovie->id)}}' class="movie__title link--huge">{{$categoriesMovie->movie_name}} ({{$categoriesMovie->year}})</a>

                    <p class="movie__time">{{$categoriesMovie->duration}}</p>

                    <p class="movie__option"><strong>Country: </strong>{{$categoriesMovie->country_name}}</p>
                    <p class="movie__option"><strong>Year: </strong>{{$categoriesMovie->year}}</p>
                    <p class="movie__option"><strong>Actors: </strong>{{$categoriesMovie->actor}}</p>
                    <p class="movie__option"><strong>Director: </strong>{{$categoriesMovie->director}}</p>
                    {{--<p class="movie__option"><strong>: </strong><a href="#">{{$categoriesMovie->actor}}</a></p>--}}

                    @if($categoriesMovie->show_status==1)
                    <div class="movie__btns">
                        <a href="{{url('/book-ticket1/'.$categoriesMovie->id)}}" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this movie</span></a>
                    </div>
                    @endif

                    <div class="preview-footer">

                        <div class="movie__rate" style="padding-bottom: 32px"><div class=""></div><p class="movie__option"><strong>Show Place: </strong><a href="#">{{$categoriesMovie->movie_hall_id}}</a></p>
                        </div>



                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- Time table (choose film start time)-->

                <!-- end time table-->

            </div>

            @endforeach

            <!-- end movie preview item -->

            {{--<div class="coloum-wrapper pagination">--}}
                {{--{{$categoriesMovies->links()}}--}}
            {{--</div>--}}

        </div>

    </section>

    <div class="clearfix"></div>


@endsection