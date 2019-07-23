@extends('front.master')
@section('title')
    Ticket
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
            @foreach($ticket_movies->unique('movie_name') as $ticket_movie)
            <h2 class="page-heading heading--outcontainer">Choosen movie : <span style="color: #00A8FF">{{$ticket_movie->movie_name}}</span></h2>
           @endforeach
            @foreach($ticket_movies->unique('hall_name') as $ticket_movie)
                <h2 class="page-heading heading--outcontainer">Choosen Cinema Hall : <span style="color: #00A8FF">{{$ticket_movie->hall_name}}</span></h2>
            @endforeach
        </section>



        <section class="container">
            <div class="col-sm-12">






                <div class="time-select time-select--wide">
                    <div class="time-select__group group--first" style="color: blue;">
                        <div class="col-sm-6">
                            <p class="time-select__place" style="font-size: 20px">Date</p>
                        </div>

                    </div>
                    <hr/>

                    @foreach($ticket_movies->unique('date') as $ticket_movie)
                        <div class="time-select__group">
                            <div class="col-sm-6">
                                <form action="{{ url('/new-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                                    <div class="form-group">


                                        <input type="radio" name="date" value="{{$ticket_movie->date}}">{{$ticket_movie->date}} <br/>


                                    </div>
                                </form>
                            </div>

                        </div>

                    @endforeach


                </div>



                <h2 class="page-heading">Choose Date</h2>

                <form action="{{ url('/date-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="choose-container choose-container--short">
                        <span class="datepicker__marker"><i class="fa fa-home"></i> Select Date  :</span>


                        <select required name="date" class="form-control">

                            <option value="">---Select Date---</option>
                            @foreach($ticket_movies->unique('date') as $ticket_movie)

                                <option value="{{$ticket_movie->date}}"> {{$ticket_movie->date}} </option>

                            @endforeach

                        </select>

                        @foreach($ticket_movies->unique('date') as $ticket_movie)
                            <input type="hidden" name="movie_name" value="{{$ticket_movie->movie_name}}">
                            <input type="hidden" name="hall_name" value="{{$ticket_movie->hall_name}}">

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