@extends('front.master')
@section('title')
    Cart
@endsection

@section('content')
    <!-- Search bar -->

    <style xmlns:color="http://www.w3.org/1999/xhtml">


        .head2 {
            font-size:1em;
            font-weight: 300;
            text-align: center;
            display: block;
            line-height:1em;
            padding-bottom: 2em;
            color: blue;
        }

        .head2 a {
            font-weight: 700;
            text-transform: uppercase;
            color: #FB667A;
            text-decoration: none;
        }

        .blue { color: #185875; }
        .yellow { color: #FFF842; }

        .container th .head1 {
            font-weight: bold;
            font-size: 1em;
            text-align: left;
            color: #185875;
        }

        .container td {
            font-weight: normal;
            font-size: 1em;
            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
            -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
        }



        .container td, .container th {
            padding-bottom: 2%;
            padding-top: 2%;
            padding-left:2%;
        }

        /* Background-color of the odd rows */
        .container tr:nth-child(odd) {
            background-color: #323C50;
        }

        /* Background-color of the even rows */
        .container tr:nth-child(even) {
            background-color: #2C3446;
        }

        .container th {
            background-color: #1F2739;
        }

        .container td:first-child { color: #FB667A; }

        .container tr:hover {
            background-color: #464A52;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
        }

        .container td:hover {
            background-color: #FFF842;
            color: #403E10;
            font-weight: bold;

            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);

            transition-delay: 0s;
            transition-duration: 0.4s;
            transition-property: all;
            transition-timing-function:line;
        }

        @media (max-width: 800px) {
            .container td:nth-child(4),
            .container th:nth-child(4) { display: none; }
        }
    </style>


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
                <div class="order-step first--step order-step--disable  ">1. What &amp; Where &amp; When &amp; Choose a sit</div>
                <div class="order-step second--step ">2. Show Cart </div>
                <div class="order-step third--step order-step--disable">3. Check out</div>
            </div>
            <div class="col-sm-12">
            <div class="time-select time-select--wide">


                <div class="time-select time-select--wide" style="font-size: 15px">

                    @if(Session::get('message'))
                        <h2 style="text-align: center;color: green;font-weight: 700;">{{ Session::get('message') }}</h2>
                    @endif
                     <h2 class="head2" style="font-size: 30px"> See You Cart Details </h2>


                    <table class="container">
                        <tr>
                            <th style="color:white;">Ticket ID</th>
                            <th style="color:white;">Show Name</th>
                            <th style="color:white;">Place Name</th>
                            <th style="color:white;">Date</th>
                            <th style="color:white;">Time/Gate</th>
                            <th style="color:white;">Ticket Price</th>
                            <th style="color:white;">Ticket Quantity</th>
                            <th style="color:white;">Number Of Seat</th>
                            <th style="color:white;">Total Price</th>
                          <tr/>
                        </thead>
                        <tbody>
                        <tbody>



                            <tr >


                                <td style="color:palevioletred;">{{$final_ticket->id}}</td>
                                <td style="color:palevioletred;">{{$final_ticket->movie_name}}</td>
                                <td style="color:palevioletred;">{{$final_ticket->hall_name}}</td>
                                <td style="color:palevioletred;">{{$final_ticket->date}}</td>
                                <td style="color:palevioletred;">{{$final_ticket->time}}</td>
                                <td style="color:palevioletred;">{{$final_ticket->price}}</td>
                                <td style="color:palevioletred;">{{$quantity}}</td>
                                <td style="color:palevioletred;">@php echo $seat_number @endphp</td>
                                <td style="color:palevioletred;">BDT. {{$grandTotal=$quantity*$final_ticket->price}}</td>

                               {{Session::put('grandTotal',$grandTotal)}}
                               {{Session::put('tiketId',$final_ticket->id)}}
                               {{Session::put('quantity',$quantity)}}
                               {{Session::put('number',$seat_number)}}


                            </tr>






                        </tbody>

                        </tbody>
                    </table>
                        <div class="clearfix"></div>
                        {{--<table class="container">--}}

                            {{--<tr class="odd gradeX">--}}
                                {{--<th style="color:white;">Sun Total</th>--}}
                                {{--<td style="color:palevioletred;">BDT. {{$sum}}</td>--}}
                            {{--<tr/>--}}
                            {{--<tr class="odd gradeX">--}}
                                {{--<th style="color:white;">Discount</th>--}}
                                {{--<td style="color:palevioletred;">BDT. 0</td>--}}
                            {{--<tr/>--}}
                            {{--<tr class="odd gradeX">--}}
                                {{--<th style="color:white;">Tax</th>--}}
                                {{--<td style="color:palevioletred;">BDT. 0</td>--}}
                            {{--<tr/>--}}
                            {{--<tr class="odd gradeX">--}}
                                {{--<th style="color:white;">Grand Total</th>--}}
                                {{--<td style="color:palevioletred;">BDT. {{$sum}}</td>--}}
                            {{--<tr/>--}}

                        {{--</table>--}}


                </div>




                <div class="clearfix"></div>

                <a href="{{url('/cancel-ticket')}}" class="btn btn-success">Cancel Booking</a>
                {{--@if(Session::get('customerId') && Session::get('shippingId'))--}}
                {{--<a href="{{url('/payment-info')}}" class="btn btn-primary">CheckOut</a>--}}
                 @if(Session::get('customerId'))
                    <a href="{{url('/shipping-info')}}" class="btn btn-primary">CheckOut</a>

                @else
                    <a href="{{url('/checkout')}}" class="btn btn-primary">CheckOut</a>
                   @endif


            </div>
            </div>

        </section>


        <div class="clearfix"></div>






        <div class="clearfix"></div>



@endsection