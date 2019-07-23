@extends('front.master')
@section('title')
    ShippingInfo
@endsection

@section('content')
    <!-- Search bar -->
    <style>

        .regi_form{
            margin-bottom: 0px;
            width: 380px;
            border-radius: 10px
        }
        .field_error{
            color: red;
        }

    </style>




        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="{{asset('/front/')}}/images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>

                </div>
            </div>
            <div class="order-step-area">
                <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                <div class="order-step second--step order-step--disable">2. Choose a sit</div>
                <div class="order-step third--step">3. Check out</div>
            </div>




            <div class="col-sm-12">
                <div class="well">
                    <div class="container">
                        {{--@if(isset($message) && !empty($message))--}}
                            {{--<h3 class="text-center">{{$message}} </h3>--}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center text-danger" style="font-size: 25px;color: red; border: 1px solid #1c2d3f">
                                    @if($message=Session::get('message'))
                                        {{$message}}
                                    @else
                                        <h3 class="text-center">Welcome {{Session::get('customerName')}}.You have to give us product shipping information to complete your valuable order.If your billing info and shipping info is same then click in shipping info button. </h3>
                                    @endif   <hr/>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel-body">
                                    <h2 class="text-center text-success">Shipping Information</h2>
                                    <br/>

                                    <form class="form-horizontal" action="{{url('/new-shipping')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Full Name</label>
                                            <div class="col-md-9" >
                                                <input type="text" required name="full_name" value="{{$customer->first_name.' '.$customer->last_name}}" class="form-control regi_form"/>
                                                <p class="field_error">{{$errors->has('full_name') ? $errors->first('full_name'):' '}}</p>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9" >
                                                <input type="email" required name="email" value="{{$customer->email}}" class="form-control regi_form"/>
                                                <p class="field_error">{{$errors->has('email') ? $errors->first('email'):' '}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone Number</label>
                                            <div class="col-md-9" >
                                                <input type="number" required name="phone_number" value="{{$customer->phone_number}}" class="form-control regi_form"/>
                                                <p class="field_error" >{{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9" >
                                                <textarea name="address" required class="form-control regi_form" style="resize: vertical">{{$customer->address}}</textarea>
                                                <p class="field_error">{{$errors->has('address') ? $errors->first('address'):' '}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="submit" name="btn" class="btn btn-success btn-block regi_form" value="Save Shipping Info"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>

            {{--<p class="reservation-message">Fill your contact information to recieve your reservation code. Reserved tickets are removed 20 minutes befor the session is due to start</p>--}}




            {{--<h2 class="page-heading">price</h2>--}}
            {{--<ul class="book-result">--}}
                {{--<li class="book-result__item">Tickets: <span class="book-result__count booking-ticket">3</span></li>--}}
                {{--<li class="book-result__item">One item price: <span class="book-result__count booking-price">$20</span></li>--}}
                {{--<li class="book-result__item">Reservation fee: <span class="book-result__count">$3</span></li>--}}
                {{--<li class="book-result__item">Total: <span class="book-result__count booking-cost">$69</span></li>--}}
            {{--</ul>--}}



    {{--<div class="order">--}}
        {{--<a href="book-final.html" class="btn btn-md btn--warning btn--wide">reserve</a>--}}
    {{--</div>--}}



    </section>


    <div class="clearfix"></div>






    <div class="clearfix"></div>



@endsection