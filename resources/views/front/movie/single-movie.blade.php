@extends('front.master')
@section('title')
    Single Show
@endsection

@section('content')

    <div style="padding: 28px"></div>

    <section class="container">
        <div class="col-sm-12">
            <div class="movie">
                <h2 class="page-heading">{{$movie_details->movie_name}}</h2>

                <div class="movie__info">
                    <div class="col-sm-4 col-md-3 movie-mobile">
                        <div class="movie__images">
                            <img alt='' src="{{asset($movie_details->movie_image)}}">
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-9">
                        <p class="">{{$movie_details->movie_name}}</p>
                        <p class="" style="color: orange">{{$show_status->status_name}}</p>

                        <p class="movie__option"><strong>Country: </strong>{{$movie_details->country_name}}</p>
                        <p class="movie__option"><strong>Year: </strong>{{$movie_details->year}}</p><br/>
                        <p class="movie__option"><strong>Category: </strong>{{$movie_category->category_name}}</p><br/>
                        <p class="movie__option"><strong>Release Date: </strong>{{$movie_details->duration}}</p><br/>
                        <p class="movie__option"><strong>Director/Sponsor: </strong>{{$movie_details->director}}</p><br/>
                        <p class="movie__option"><strong>Actors/Team: </strong>{{$movie_details->actor}}</p><br/>
                        <p class="movie__option"><strong>Hall/Sradium Name: </strong>{{$movie_details->movie_hall_id}}</p>


                        @if($movie_details->show_status==1)
                        <div class="movie__btns movie__btns--full">
                            <a href="{{url('/book-ticket1/'.$movie_details->id)}}" class="btn btn-md btn--warning">book a ticket for this movie</a>
                        </div>
                        @endif


                    </div>
                </div>

                <div class="clearfix"></div>

                <h2 class="page-heading">The plot</h2>

                <p class="movie__describe"> {{$movie_details->movie_description}} </p>
                <h2 class="page-heading">videos</h2>





                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <iframe width="100%" height="500" src="{{$movie_details->trailer_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
                            <!--First Slide-->



                {{--<div class="swiper-container" >--}}
                        {{--<div class="swiper-wrapper">--}}
                            {{--<!--First Slide-->--}}
                            {{--<a href="https://www.youtube.com/watch?v=TmtoE-yZigs&t=3s"></a>--}}

                            {{--<div class="swiper-slide media-video">--}}
                                {{--<a href='{{$movie_details->trailer_link}}' class="movie__media-item " data-mfp-src="{{$movie_details->trailer_link}}">--}}
                                    {{--@php preg_match('/[a-z0-9_-]{11}/i', $movie_details->trailer_link, $matches); @endphp--}}
                                    {{--<img src='http://i.ytimg.com/vi/{{$matches[0]}}/mqdefault.jpg' />--}}
                                {{--</a>--}}
                            {{--</div>--}}




                        {{--</div>--}}
                    {{--</div>--}}

            </div>

            {{--<h2 class="page-heading">See Cinema Hall , Price and Date</h2>--}}

            {{--<div class="time-select time-select--wide">--}}
                {{--<div class="time-select__group group--first" style="color: blue;">--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<p class="time-select__place" style="font-size: 20px">Cinema Hall Name</p>--}}
                    {{--</div>--}}
                    {{--<ul class="col-sm-6 items-wrap">--}}
                        {{--<li class="time-select__item" data-time='09:40'>Price</li>--}}
                        {{--<li class="time-select__item" data-time='09:40'>Starting Date</li>--}}
                        {{--<li class="time-select__item" data-time='13:45'>Ending Date</li>--}}
                        {{--<li class="time-select__item" data-time='13:45'>Available Ticket</li>--}}

                    {{--</ul>--}}
                {{--</div>--}}
                {{--<hr/>--}}

                {{--@foreach($movie_tickets as $movie_ticket)--}}
                    {{--<div class="time-select__group">--}}
                        {{--<div class="col-sm-3">--}}
                            {{--<p class="time-select__place">{{$movie_ticket->hall_name}}</p>--}}
                        {{--</div>--}}
                        {{--<ul class="col-sm-6 items-wrap">--}}
                            {{--<li class="time-select__item" data-time='10:45'>{{$movie_ticket->price}}</li>--}}
                            {{--<li class="time-select__item" data-time='10:45'>{{$movie_ticket->starting_date}}</li>--}}
                            {{--<li class="time-select__item" data-time='16:00'>{{$movie_ticket->ending_date}}</li>--}}
                            {{--<li class="time-select__item" data-time='16:00'>{{$movie_ticket->available_ticket}}</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}

                {{--@endforeach--}}


            {{--</div>--}}

            <div class="clearfix"></div>
          <h2>Comment</h2>
            <div class="comment-wrapper">
                @if(Session::get('customerId'))
                <form action="{{url('/comment')}}" id="comment-form" class="comment-form" method='POST'>
                    <textarea style="color: black" class="comment-form__text" name="comment" placeholder='Add you comment here'></textarea>
                    <div class="col-md-9 col-md-offset-3" style="text-align: right">
                        <input type="hidden" name="movie_id" value="{{$movie_details->id}}"/>
                        <input type="submit" name="btn" class="btn btn-success regi_form" value="Submit"/>
                    </div>
                </form>
                @else
                    <h4>For comment, Please log in</h4>
                @endif

              @if($comments)
                <div class="comment-sets">

                    @foreach($comments as $comment)

                    <div class="comment">
                        <div class="comment__images">
                            <img alt='' src="{{asset('/front/')}}/images/comment/avatar.jpg">
                        </div>

                        <p style="font-weight: 700;color:orange;font-size: 20px;" class="comment__date">{{$comment->customer}}</p>
                        <p class="comment__date">{{$comment->created_at}}</p>
                        <p class="comment__message">{{$comment->comment}}</p>

                    </div>

                    @endforeach
                 @endif



                </div>

                <div class="clearfix"></div>
                <!-- hiden maps with multiple locator-->


                    <h2 id='target' class="page-heading heading--outcontainer">{{$movie_category->category_name}} SHOW</h2>
                    <div class="col-sm-12">
                        <div class="row">

                                @foreach($category_movies as $category_movie)

                                <div class="col-sm-4 col-md-3" style="margin-bottom: 10px">
                                        <div class="">
                                            <div class="">
                                                <a href="{{url('/single-movie/'.$category_movie->id)}}" class="movie-beta__link">
                                                    <img style="height: 300px;width: 250px" alt='' src="{{asset($category_movie->movie_image)}}">
                                                </a>
                                            </div>




                                        </div>

                                    </div>


                            @endforeach




                        </div>
                    </div>

                <div class="clearfix"></div>



                </div>
            </div>
        </div>


    </section>


        <div class="clearfix"></div>
@endsection