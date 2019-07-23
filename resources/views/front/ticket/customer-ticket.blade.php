@extends('front.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Search bar -->



    <div class="container">



        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img style="height: 80px;margin-top: 20px" class="order__images" alt='' src="{{asset('/front/')}}/images/banners/LOGO.png">
                    <p class="order__title">Collect ticket <br><span style="color: red" class="order__descript">Save This, It's very Important</span></p>

                </div>
            </div>


        </section>


        <h2 style="text-align: center">Keep this image. We need to what is you show and order id</h2>

        <div class="ticket">
            <div class="ticket-position">
                <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                <div class="ticket__inner">

                    <div class="ticket-secondary">
                        <span class="ticket__item">Show Id :<strong class="ticket__number">{{$ticketId}}</strong></span>
                        <span class="ticket__item">Order Id :<strong class="ticket__number">{{$orderId}}</strong></span>

                        <span class="ticket__item">Place: <span class="ticket__cinema">{{$ticket->hall_name}}</span></span>
                        <span class="ticket__item ticket__date">{{$ticket->date}}</span>
                        <span class="ticket__item ticket__time">{{$ticket->time}}</span>
                        <span class="ticket__item">Total Price: <span class="ticket__hall">{{$ticket->price*$orderDetail->quantity}}</span></span>
                        {{--<span class="ticket__item ticket__price">price: <strong class="ticket__cost"></strong></span>--}}
                    </div>

                    <div class="ticket-primery">
                        <span class="ticket__item ticket__item--primery ticket__film">SHOW NAME :<br><strong class="ticket__movie">{{$ticket->movie_name}}</strong></span>
                        <span class="ticket__item ticket__item--primery">Number Of Sits: <span class="ticket__place">{{$orderDetail->seat_number}}</span></span>
                        <span class="ticket__item ticket__item--primery">Quantity Of Sits: <span class="ticket__place">{{$orderDetail->quantity}}</span></span>
                    </div>


                </div>
                <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
            </div>
        </div>





        <div class="clearfix"></div>


@endsection