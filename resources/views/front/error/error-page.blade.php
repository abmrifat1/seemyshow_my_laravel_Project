@extends('front.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Search bar -->


    <div class="container">


        <body>
        <div class="wrapper">
            <div class="error-wrapper">

                <div class="error">
                    <img alt='' src='{{asset('/front/')}}/images/error.png' class="error__image">
                    <h1 class="error__text">sorry, but page can’t be found</h1>
                    <a href="{{url('/')}}" class="btn btn-md btn--warning">return to homepage</a>
                </div>
            </div>



        </div>

        </body>
        <div class="clearfix"></div>


@endsection