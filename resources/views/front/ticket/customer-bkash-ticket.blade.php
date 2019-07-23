@extends('front.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Search bar -->

    <style>

        .regi_form{
            margin-bottom: 0px;
            width: 200px;
            border-radius: 10px
        }
        .field_error{
            color: red;
        }

    </style>



    <div class="container">



        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img style="height: 80px;margin-top: 20px" class="order__images" alt='' src="{{asset('/front/')}}/images/banners/LOGO.png">
                    <p class="order__title">Collect ticket <br><span style="color: red" class="order__descript">Save This, It's very Important</span></p>

                </div>
            </div>

            <h2 style="text-align: center">Our Bkash no: 01772515721</h2>
            <h2 style="text-align: center">Fill Bkash Info. We confirm you within 30 minute.</h2>


            <div class="col-md-6 col-md-offset-5">

                <div class="panel-body">
                    <br/>
                    <form class="form-horizontal" action="{{url('/bkash-id')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-6">Bkash Phone Number</label>
                            <div class="col-md-9" >
                                <input type="text" name="phone_number" required class="form-control regi_form"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-6">Transition Id</label>
                            <div class="col-md-9" >
                                <input type="text" name="tid" required class="form-control regi_form"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-6"></label>
                            <div class="col-md-9" >
                                <input type="hidden" name="order_id" value="{{$orderId}}" required class="form-control regi_form"/>
                                <input type="hidden" name="ticket_id" value="{{$ticket->id}}" required class="form-control regi_form"/>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label></label>
                            <div class="col-md-6">
                                <input type="submit" name="btn" class="btn btn-success regi_form" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <br/>

        </section>


        <div class="clearfix"></div>
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