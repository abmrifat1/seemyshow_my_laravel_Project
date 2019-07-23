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
            @foreach($slote_movies->unique('movie_name') as $slote_movie)
                <h2 class="page-heading heading--outcontainer">Choosen movie : <span style="color: #00A8FF">{{$slote_movie->movie_name}}</span></h2>
            @endforeach
            @foreach($slote_movies->unique('hall_name') as $slote_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Cinema Hall : <span style="color: #00A8FF">{{$slote_movie->hall_name}}</span></h2>
            @endforeach

            @foreach($slote_movies->unique('date') as $slote_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Date : <span style="color: #00A8FF">{{$slote_movie->date}}</span></h2>
            @endforeach
            @foreach($slote_movies->unique('time') as $slote_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Slote(Time) : <span style="color: #00A8FF">{{$slote_movie->time}}</span></h2>
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



                                    @foreach($slote_movies as $slote_movie)
                                        <input type="radio" name="seat" value="{{$slote_movie->seat}}">Type Of Seat : {{$slote_movie->seat}} <br/>
                                        <input type="radio" name="price" value="{{$slote_movie->price}}">Ticket Price : {{$slote_movie->price}} <br/>
                                        <input type="radio" name="available_ticket" value="{{$slote_movie->available_ticket}}">Available Ticket : {{$slote_movie->available_ticket}} <br/>


                                    @endforeach

                        </div>

                    </div>




                </div>



                <h2 class="page-heading">Type Of Seat</h2>

                <form action="{{ url('/seat-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="choose-container choose-container--short">
                        <span class="datepicker__marker"><i class="fa fa-home"></i> Select Date  :</span>


                        <select required name="seat" class="form-control">

                            <option value="">---Type Of Seat---</option>
                            @foreach($slote_movies as $slote_movie)

                                <option value="{{$slote_movie->seat}}"> {{$slote_movie->seat}} </option>

                            @endforeach

                        </select>

                        @foreach($slote_movies as $slote_movie)
                            <input type="hidden" name="movie_name" value="{{$slote_movie->movie_name}}">
                            <input type="hidden" name="hall_name" value="{{$slote_movie->hall_name}}">
                            <input type="hidden" name="date" value="{{$slote_movie->date}}">
                            <input type="hidden" name="time" value="{{$slote_movie->time}}">

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