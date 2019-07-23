@extends('front.master')
@section('title')
    Home
@endsection

@section('content')

    <!-- Main content -->
    <script type="text/javascript">
        var selected_movie = "{{$movies->movie_name}}"
    </script>
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

        <h2 class="page-heading heading--outcontainer">Choosen movie : <span style="color: #00A8FF">{{$movies->movie_name}}</span></h2>
    </section>


    <section class="container">
        <div class="col-sm-12">

            <h2 class="page-heading">Choose Cinema Hall &amp; Date</h2>

            {{-- <form action="{{ url('/hall-ticket') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="choose-container choose-container--short">
                <span class="datepicker__marker"><i class="fa fa-home"></i> Cinema Hall  :</span>
                <input type="hidden" name="movie_name"  value="{{$movies->movie_name}}">

                <select required name="hall_name" class="form-control">

                    <option value="">---Select Hall Name---</option>
                    @foreach($movie_tickets->unique('hall_name') as $movie_ticket)
                    <option value="{{$movie_ticket->hall_name}}">{{$movie_ticket->hall_name}} </option>
                    @endforeach

                </select>










                <div class="booking-pagination">
                    <a href="#" class="booking-pagination__prev hide--arrow">
                        <span class="arrow__text arrow--prev"></span>
                        <span class="arrow__info"></span>
                    </a>



                    <input type="submit"  name="btn" class="btn btn-block btn-success" value="Save Ticket Info"/>


                </div>

            </div>
            </form> --}}



            {{-- <div>
                <div class="btn-group">
                    @foreach($movie_tickets->unique('date') as $movie_ticket)

                        <button data-toggle="collapse" href="#collapse{{$movie_ticket->date->format('d')}}" role="button" aria-expanded="false" aria-controls="collapse{{$movie_ticket->date->format('d')}}" type="button" class=" btn-lg btn--shine">{{$movie_ticket->date->format('d')}}</button>

                    @endforeach
                </div>

                <ul class="hall-lists">
                    @foreach ($movie_tickets as $movie_ticket)
                    <div class="hall-lists">
                        <h3>{{$movie_ticket->hall_name}}</h3>
                        <a class="borderradius btn btn--sign btn-default" href="">

                            {{\Carbon\Carbon::createFromFormat('H:i:s',$movie_ticket->time)->format('h:i A')}}
                        </a>
                    </div>
                    @endforeach

                </ul>


            </div> --}}

            <div id="example"></div>
        </div>

    </section>



    <div class="clearfix"></div>


    <style>
        .hall-schedule{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ddd;
            padding: 7px;
            border-radius: 4px;
            margin-bottom: 5px;
        }
        .hall-schedule h3{
            margin: 7px;
        }
        .fade.show{
            opacity: 1 !important;

        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
            background: #49ba8e;
            border-color: #49ba8e;
            color: #fff
        }
    </style>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

@endsection