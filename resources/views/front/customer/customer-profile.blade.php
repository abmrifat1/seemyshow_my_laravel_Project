@extends('front.master')
@section('title')
    Profile
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
                    <h2 class="head2" style="font-size: 30px"> Your Profile </h2>
                       <h3>First Nmae : {{$customer->first_name}}</h3>
                       <h3>Last Nmae : {{$customer->last_name}}</h3>
                       <h3>Email : {{$customer->email}}</h3>
                       <h3>Phone Number : {{$customer->phone_number}}</h3>
                       <h3>Address : {{$customer->address}}</h3>

                </div>
            </div>

            <div class="col-sm-12">
                <div class="time-select time-select--wide">


                    <div class="time-select time-select--wide" style="font-size: 15px">

                        @if(Session::get('message'))
                            <h2 style="text-align: center;color: green;font-weight: 700;">{{ Session::get('message') }}</h2>
                        @endif
                        <h2 class="head2" style="font-size: 30px"> Your Previous Order-List </h2>


                        <table class="container">
                            <tr>
                                <th style="color:white;">Order Details ID</th>
                                <th style="color:white;">Booking Time</th>
                                <th style="color:white;">Show Name</th>
                                <th style="color:white;">Place Name</th>
                                <th style="color:white;">Date</th>
                                <th style="color:white;">Time</th>
                                <th style="color:white;">Ticket Price</th>
                                <th style="color:white;">Ticket Quantity</th>
                                <th style="color:white;">Number Of Ticket</th>
                                <th style="color:white;">Total Price</th>
                            <tr/>
                            </thead>
                            <tbody>
                            <tbody>


                            @foreach($previousOrders as $previousOrder)

                                <tr >

                                <td style="color:palevioletred;">{{$previousOrder->id}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->created_at}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->name}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->place}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->date}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->time}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->price}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->quantity}}</td>
                                <td style="color:palevioletred;">{{$previousOrder->seat_number}}</td>
                                <td style="color:palevioletred;">BDT. {{$previousOrder->price*$previousOrder->quantity}}</td>

                            </tr>
                            @endforeach

                            </tbody>

                            </tbody>
                        </table>
                    </div>



                </div>
            </div>

        </section>


        <div class="clearfix"></div>






        <div class="clearfix"></div>



@endsection