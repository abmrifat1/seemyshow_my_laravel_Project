@extends('front.master')
@section('title')
    Payment
@endsection

@section('content')
    <!-- Search bar -->







        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="{{asset('/front/')}}/{{asset('/front/')}}/images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>

                </div>
            </div>
            <div class="order-step-area">
                <div class="order-step first--step  ">Payment Information</div>

                <h2 class="page-heading">Choose payment method</h2>

                <div class="payment">

                    <a href="{{url('/cash-in-delivery')}}"  class="payment__item">
                        <button name="payment_type" value="cash" class="btn btn-success">Cash In Delivery</button>
                    </a>
                    <a href="{{url('/bkash')}}"  class="payment__item">
                        <button name="payment_type" value="bkash" class="btn btn-success">Bkash</button>
                    </a>
                    {{--<a href="{{url('/new-order')}}"  class="payment__item">--}}
                        {{--<img alt='' src="{{asset('/front/')}}/images/payment/pay1.png">--}}
                    {{--</a>--}}
                    {{--<a href="{{url('/new-order')}}" class="payment__item">--}}
                        {{--<img alt='' src="{{asset('/front/')}}/images/payment/pay6.png">--}}
                    {{--</a>--}}
                    {{--<a href="{{url('/new-order')}}" class="payment__item">--}}
                        {{--<img alt='' src="{{asset('/front/')}}/images/payment/pay7.png">--}}
                    {{--</a>--}}
                </div>

            </div>






            <div class="clearfix"></div>





        </section>


        <div class="clearfix"></div>






        <div class="clearfix"></div>



@endsection