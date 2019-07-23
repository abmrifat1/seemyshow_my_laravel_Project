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

        <div class="clearfix"></div>


          </section>


    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <h2>  Movie : <span style="color: #00A8FF;background-color: yellow">{{$seat_movie->movie_name}} </span></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>  Cinema Hall :<span style="color: #00A8FF;background-color: yellow">{{$seat_movie->hall_name}}</span> </h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>  Date : <span style="color: #00A8FF;background-color: yellow">{{$seat_movie->date}}</span></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>  Time/Gate : <span style="color: #00A8FF;background-color: yellow">{{$seat_movie->time}}</span></h2>
            </div>
        </div>
    </div>




    <section class="container">
        <div class="col-sm-12">






            <div class="time-select time-select--wide">
                <div class="time-select__group group--first" style="color: blue;">


                </div>
                <hr/>


                <div class="time-select__group">
                    <div class="col-sm-6 col-md-offset-3" style="text-align: center;font-size: 25px">
                        <form action="{{ url('/final-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <br/>

                            <input type="radio" name="price" value="{{$seat_movie->price}}">Ticket Price : {{$seat_movie->price}} <br/>
                            <input  type="radio" name="available_ticket" value="{{$seat_movie->available_ticket}}">Available Ticket : {{$seat_movie->available_ticket}} <br/>


                              <br/>

                                <span class="datepicker__marker"><i class="fa fa-home"></i> Choose Quantity Of Tickets  :</span>
                                <input type="number" name="ticket_number" required value="number" max="{{$seat_movie->available_ticket}}" min="1">
                                <span style="color: red;">{{ $errors->has('ticket_number') ? $errors->first('ticket_number') : ' ' }}</span>


                                </select>

                                <input type="hidden" name="id" value="{{$seat_movie->id}}">

                                <div class="booking-pagination">
                                    <a href="#" class="booking-pagination__prev hide--arrow">
                                        <span class="arrow__text arrow--prev"></span>
                                        <span class="arrow__info"></span>
                                    </a>



                                    <input type="submit"  name="btn" class="btn btn-block btn-success" value="Save Ticket Info"/>


                                </div>

                               </form>
                            </div>





                    </div>

                </div>




            </div>





        </div>

    </section>



    <div class="clearfix"></div>






    <div class="clearfix"></div>


    @endsection