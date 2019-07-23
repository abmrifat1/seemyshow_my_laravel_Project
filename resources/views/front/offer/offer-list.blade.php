@extends('front.master')
@section('title')
    Offer
@endsection

@section('content')



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->
    <section class="container">
        <div class="col-sm-12">
            <h2 class="page-heading">Best offers</h2>

            <div class="offers-block">
                <p class="offer-place"> Watch Happily With Best Offers </p>
                @foreach($offers as $offer)

                <div class="col-xs-6 col-sm-4 col-md-3 offers-wrap">
                    <a href='#' class="offer offer--winter">
                        <div class="offer__head">
                            <p class="offer__name">{{$offer->offer_title}}<br></p>

                        </div>
                        <p class="offer__full">{{$offer->offer_description}}</p>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
    </section>


    <div class="clearfix"></div>
@endsection