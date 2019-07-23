@extends('front.master')
@section('title')
    Sports
@endsection

@section('content')
    <!-- Search bar -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">SeeMyShow : Sports And Concert </h2>
            </div>
        </div>
    </div>



        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">Sports And Concert</h2>



                <!-- Movie preview item -->
                @foreach($categoriesSports as $categoriesSport)

                    <div class="movie movie--preview movie--full release">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="movie__images">
                                <a href="{{url('/single-movie/'.$categoriesSport->id)}}" class="movie-beta__link">
                                    <img alt='' src="{{asset($categoriesSport->movie_image)}}">
                                </a>
                            </div>

                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                            <a href='{{url('/single-movie/'.$categoriesSport->id)}}' class="movie__title link--huge">{{$categoriesSport->movie_name}} ({{$categoriesSport->year}})</a>

                            <p class="movie__time">{{$categoriesSport->duration}}</p>

                            <p class="movie__option"><strong>Country: </strong>{{$categoriesSport->country_name}}</p>
                            <p class="movie__option"><strong>Year: </strong>{{$categoriesSport->year}}</p>
                            <p class="movie__option"><strong>Teams: </strong>{{$categoriesSport->actor}}</p>
                            <p class="movie__option"><strong>Sponsor: </strong>{{$categoriesSport->director}}</p>
                            {{--<p class="movie__option"><strong>: </strong><a href="#">{{$categoriesMovie->actor}}</a></p>--}}

                            @if($categoriesSport->show_status==1)
                            <div class="movie__btns">
                                <a href="{{url('/book-ticket1/'.$categoriesSport->id)}}" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this Show</span></a>
                            </div>
                            @endif

                            <div class="preview-footer">
                                <div class="movie__rate" style="padding-bottom: 32px"><div class=""></div><span class="movie__rate-number">
                                 <p class="movie__option"><strong>Stadium : </strong>{{$categoriesSport->movie_hall_id}}</p>

                                    </span></div>



                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- Time table (choose film start time)-->

                        <!-- end time table-->

                    </div>

            @endforeach

            <!-- end movie preview item -->



            </div>

        </section>

        <div class="clearfix"></div>


@endsection