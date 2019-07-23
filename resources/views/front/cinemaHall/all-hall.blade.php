@extends('front.master')
@section('title')
    Show Place
@endsection

@section('content')



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->

    <section class="container">
        <div class="col-sm-12">
            <h2 class="page-heading">cinema Hall</h2>

            <div class="tags-area tags-area--thin">
                <form id='select' class="select" method='get'>

                </form>


            </div>

            <div class="cinema-wrap">
                <div class="row">

                        @forelse($allHalls as $allHall)
                        <div class="col-xs-6 col-sm-3 cinema-item">
                            <div class="cinema">
                              <a href='{{url('/single-hall/'.$allHall->id)}}' class="cinema__images">
                                <img alt='' src="{{asset($allHall->hall_image)}}">
                              </a>
                               <a href="{{url('/single-hall/'.$allHall->id)}}" class="cinema-title">{{$allHall->hall_name}}</a>
                            </div>
                        </div>
                        @endforeach


                </div>

                <div class="adv-place"><img alt='' src="{{asset('/front/')}}/images/banners/film.jpg"></div>


            </div>




        </div>

        <div class="clearfix"></div>

        <div class="col-sm-12">
            <h2 class="page-heading">Stadium</h2>

            <div class="tags-area tags-area--thin">
                <form id='select' class="select" method='get'>

                </form>


            </div>

            <div class="cinema-wrap">
                <div class="row">

                    @forelse($allStadiums as $allStadium)
                        <div class="col-xs-6 col-sm-3 cinema-item">
                            <div class="cinema">
                                <a href='{{url('/single-hall/'.$allStadium->id)}}' class="cinema__images">
                                    <img alt='' src="{{asset($allStadium->hall_image)}}">
                                </a>
                                <a href="{{url('/single-hall/'.$allStadium->id)}}" class="cinema-title">{{$allStadium->hall_name}}</a>
                            </div>
                        </div>
                        @endforeach


                </div>
                <div class="adv-place"><img alt='' src="{{asset('/front/')}}/images/banners/film.jpg"></div>








            </div>



        </div>
    </section>


    <div class="clearfix"></div>
@endsection