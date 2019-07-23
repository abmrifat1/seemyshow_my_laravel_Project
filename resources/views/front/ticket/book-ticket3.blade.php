@extends('front.master')
@section('title')
    Home
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

    <div class="container">


        <div/>

        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="{{asset('/front/')}}/images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>

                </div>
            </div>
            <div class="order-step-area">
                <div class="order-step first--step  ">1. What &amp; Where &amp; When &amp; Choose a sit</div>
                <div class="order-step second--step order-step--disable">2. Show Cart </div>
                <div class="order-step third--step order-step--disable">3. Check out</div>
            </div>
            @foreach($date_movies->unique('movie_name') as $date_movie)
                <h2 class="page-heading heading--outcontainer">Choosen movie : <span style="color: #00A8FF">{{$date_movie->movie_name}}</span></h2>
            @endforeach
            @foreach($date_movies->unique('hall_name') as $date_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Cinema Hall : <span style="color: #00A8FF">{{$date_movie->hall_name}}</span></h2>
            @endforeach

            @foreach($date_movies->unique('date') as $date_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Date : <span style="color: #00A8FF">{{$date_movie->date}}</span></h2>
            @endforeach
        </section>



        <section class="container">
            <div class="col-sm-12">






                <div class="time-select time-select--wide">
                    <div class="time-select__group group--first" style="color: blue;">
                        <div class="col-sm-6">
                            <p class="time-select__place" style="font-size: 20px">Show Time</p>
                        </div>

                    </div>
                    <hr/>


                        <div class="time-select__group">
                            <div class="col-sm-6">
                                <form action="{{ url('/new-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                                    <div class="form-group">

                                        @foreach($date_movies->unique('time') as $date_movie)
                                        <input type="radio" name="time" value="{{$date_movie->time}}">{{$date_movie->time}} <br/>


                                       @endforeach

                                    </div>
                                </form>
                            </div>

                        </div>




                </div>



                <h2 class="page-heading">Choose Date</h2>

                <form action="{{ url('/slote-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="choose-container choose-container--short">
                        <span class="datepicker__marker"><i class="fa fa-home"></i> Select Date  :</span>


                        <select required name="time" class="form-control">

                            <option value="">---Select Slote(Time)---</option>
                            @foreach($date_movies->unique('time') as $date_movie)

                                <option value="{{$date_movie->time}}"> {{$date_movie->time}} </option>

                            @endforeach

                        </select>

                        @foreach($date_movies as $date_movie)
                            <input type="hidden" name="movie_name" value="{{$date_movie->movie_name}}">
                            <input type="hidden" name="hall_name" value="{{$date_movie->hall_name}}">
                            <input type="hidden" name="date" value="{{$date_movie->date}}">

                        @endforeach







                        <div class="booking-pagination">
                            <a href="#" class="booking-pagination__prev hide--arrow">
                                <span class="arrow__text arrow--prev"></span>
                                <span class="arrow__info"></span>
                            </a>



                            <input type="submit"  name="btn" class="btn btn-block btn-success" value="Save Ticket Info"/>


                        </div>

                    </div>
                </form>

            </div>

        </section>



        <div class="clearfix"></div>






        <div class="clearfix"></div>


@endsection