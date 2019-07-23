@extends('front.master')
@section('title')
   Home
@endsection

@section('content')


    <!-- Slider -->
    <div class="bannercontainer">
        <div class="banner">
            <ul>

                <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Rush.'>
                    <img alt='' src="{{asset('/front/')}}/images/slides/first-slide.jpg">
                    <div class="caption slide__name margin-slider"
                         data-x="right"
                         data-y="80"

                         data-splitin="chars"
                         data-elementdelay="0.1"

                         data-speed="700"
                         data-start="1400"
                         data-easing="easeOutBack"

                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                         data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                         data-splitout="lines"
                         data-endelementdelay="0.1"
                         data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"

                         data-endspeed="500"
                         data-end="8400"
                         data-endeasing="Back.easeIn"
                    >
                        SEE MY SHOW
                    </div>

                    <div class="caption slide__time margin-slider sfr str"
                         data-x="right"
                         data-hoffset='-243'
                         data-y="186"
                         data-speed="300"
                         data-start="2100"
                         data-easing="easeOutBack"
                         data-endspeed="300"
                         data-end="8700"
                         data-endeasing="Back.easeIn"
                    >
                        A
                    </div>
                    <div class="caption slide__date margin-slider lfb ltb"
                         data-x="right"
                         data-hoffset='-149'
                         data-y="186"
                         data-speed="500"
                         data-start="2400"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-end="8200"
                         data-endeasing="Back.easeIn"
                    >

                    </div>
                    <div class="caption slide__time margin-slider sfr str"
                         data-x="right"
                         data-hoffset='-113'
                         data-y="186"
                         data-speed="300"
                         data-start="2100"
                         data-easing="easeOutBack"
                         data-endspeed="300"
                         data-end="8700"
                         data-endeasing="Back.easeIn"
                    >
                        Ticket Booking
                    </div>
                    <div class="caption slide__date margin-slider lfb ltb"
                         data-x="right"
                         data-y="186"
                         data-speed="500"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-end="8200"
                         data-endeasing="Back.easeIn"
                    >
                        Web Site
                    </div>
                    <div class="caption slide__text margin-slider customin customout"
                         data-x="right"
                         data-y="250"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="400"
                         data-start="3000"
                         data-endspeed="400"
                         data-end="8000"
                         data-endeasing="Back.easeIn">
                        The most popular web site for book show ticket<br> Book your favourite movie ticket from your nearest hall<br> Collect the cricket, football andConcert ticket.
                    </div>
                    <div class="caption margin-slider skewfromright customout "
                         data-x="right"
                         data-y="324"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="400"
                         data-start="3300"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-end="7700"
                         data-endeasing="Power4.easeOut">
                        {{--<a href="{{url('/all-category')}}" target="_blank" class="slide__link">check out cinemas &amp; time</a>--}}
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide='Travel worldwide.
Create trip film.'>
                    <img alt='' src="{{asset('/front/')}}/images/bg-video.jpg">
                    <div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                        <video class="media-element"  autoplay="autoplay" preload='none' loop="loop" muted="" src="{{asset('/front/')}}/video/TravelIs.mp4" >
                            <source type="video/webm" src="{{asset('/front/')}}/video/TravelIs.html">
                            <source type="video/mp4" src="{{asset('/front/')}}/TravelIs.mp4">
                            <source type="video/ogg" src="{{asset('/front/')}}/TravelIs-2.html">
                        </video>
                    </div>

                    <div class="caption slide__name slide__name--smaller"
                         data-x="left"
                         data-y="160"

                         data-splitin="chars"
                         data-elementdelay="0.1"

                         data-speed="700"
                         data-start="1400"
                         data-easing="easeOutBack"

                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                         data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                         data-splitout="lines"
                         data-endelementdelay="0.1"
                         data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                         data-endspeed="500"

                         data-endeasing="Back.easeIn"
                    >
                        Booking, Travel, Watch.
                    </div>

                    <div class="caption slide__time position-center postion-place--one sfr stl"
                         data-x="left"

                         data-y="242"
                         data-speed="300"
                         data-start="2100"
                         data-easing="easeOutBack"
                         data-endspeed="300"

                         data-endeasing="Back.easeIn">
                        See
                    </div>
                    <div class="caption slide__date position-center postion-place--two lfb ltb"
                         data-x="left"
                         data-y="242"
                         data-speed="500"
                         data-start="2400"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"

                         data-endeasing="Back.easeIn">
                        Your
                    </div>
                    <div class="caption slide__time position-center postion-place--three sfr stl"
                         data-x="left"
                         data-y="242"
                         data-speed="300"
                         data-start="2100"
                         data-easing="easeOutBack"
                         data-endspeed="300"

                         data-endeasing="Back.easeIn">
                        Show
                    </div>
                    <div class="caption slide__date position-center postion-place--four lfb ltb"
                         data-x="left"
                         data-y="242"
                         data-speed="500"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"

                         data-endeasing="Back.easeIn">
                          Timely
                    </div>

                    <div class="caption lfb slider-wrap-btn ltb"
                         data-x="left"
                         data-y="310"
                         data-speed="400"
                         data-start="3300"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"

                         data-endeasing="Power4.easeOut" >
                        {{--<a href="{{url('/all-category')}}" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>--}}
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Stop wishing.
Start doing.'>
                    <img alt='' src="{{asset('/front/')}}/images/slides/next-slide.jpg">
                    <div class="caption slide__name slide__name--smaller slide__name--specific customin customout"
                         data-x="left"
                         data-y="160"

                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                         data-speed="700"
                         data-start="1400"
                         data-easing="easeOutBack"
                         data-endspeed="500"
                         data-end="8600"
                         data-endeasing="Back.easeIn"

                    >
                        Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span>
                    </div>

                    <div class="caption slide__descript customin customout"
                         data-x="left"
                         data-y="240"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="700"
                         data-start="2000"
                         data-endspeed="500"
                         data-end="8400"
                         data-endeasing="Back.easeIn">
                        find your best match and movie with SeeMyShow
                    </div>

                    <div class="caption lfb customout slider-wrap-btn"
                         data-x="left"
                         data-y="310"
                         data-speed="500"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-endspeed="400"
                         data-end="8000"
                         data-endeasing="Power4.easeOut" >
                        {{--<a href="{{url('/all-category')}}" class="btn btn-md btn--danger slider--btn">check out movies</a>--}}
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <!--end slider -->


    <!-- Main content -->
    <section class="container">
        <div class="movie-best">
            <div class="col-sm-10 col-sm-offset-1 movie-best__rating"> Best choice</div>
            <div class="col-sm-12 change--col">
                @foreach($movies as $movie)
                <div class="movie-beta__item ">
                    <a href="{{url('/single-movie/'.$movie->id)}}">
                    <img alt='' src="{{asset($movie->movie_image)}}">
                    <span class="best-rate"><p style="color: black">{{$movie->movie_name}}</p></span>
                    </a>
                    <ul class="movie-beta__info">
                        <li><span class="best-voted">{{$movie->actor}}</span></li>
                        <li>
                            <p class="movie__time">{{$movie->duration}}</p>
                            <p></p>
                            <p></p>
                        </li>
                        <li class="last-block">
                            <a href="{{url('/single-movie/'.$movie->id)}}" class="slide__link">more</a>
                        </li>
                    </ul>
                </div>
                @endforeach


            </div>


            <div class="col-sm-10 col-sm-offset-1 movie-best__check">Book movies now playing</div>
        </div>

        <div class="col-sm-12">
            <div class="mega-select-present mega-select-top mega-select--full">
                <img src="{{asset('/front/')}}/images/banners/main_logo.png" style="height: 85px"/>

                <div class="mega-select pull-right">
                    <span class="mega-select__point">Search by:</span>
                    <ul class="mega-select__sort">
                        <li class="filter-wrap">Movie   /Sports   /Concert</li>

                    </ul>

                    <div class="agileits_search">
                        <form action="{{ url('/search') }}" method="POST">
                            {{csrf_field()}}
                            <input style="border-radius: 32px;height: 35px;width: 466px;" name="search" type="text" placeholder="search your show" required="">
                            <input style="border-radius: 32px" type="submit" name="btn" class="btn btn-success regi_form" value="Search"/>
                        </form>
                    </div>
                    <!-- //search -->


                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>

        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <!-- Movie variant with time -->

                    @php( $i=0)
                    @foreach($allMovies as $allMovie)


                         @if($i==0 || $i==1 || $i==4 || $i==5)

                    <div class="movie movie--test movie--test--dark movie--test--left">
                        <div class="movie__images">
                            <a href="{{url('/single-movie/'.$allMovie->id)}}" class="movie-beta__link">
                                <img alt='' src="{{asset($allMovie->movie_image)}}">
                            </a>
                        </div>

                        <div class="movie__info">
                            <a href='{{url('/single-movie/'.$allMovie->id)}}' class="movie__title">{{$allMovie->movie_name}}  </a>
                            <br/>
                            <br/>

                            <p class="movie__time" style="color:green;border-bottom: 2px solid purple">{{$allMovie->duration}}</p>
                            <br/>

                            <p class="movie__option" style="color:blue;border-bottom: 2px solid blue"><a href="#">{{$allMovie->country_name}}</a></p>
                           <br/>
                            <br/>
                            <p class="movie__option"><a href="#">{{$allMovie->actor}}</a></p>
                            {{--<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>--}}


                        </div>
                    </div>

                           @php($i++)


                        @else

                        <div class="movie movie--test movie--test--dark movie--test--right">
                                <div class="movie__images">
                                    <a href="{{url('/single-movie/'.$allMovie->id)}}" class="movie-beta__link">
                                        <img alt='' src="{{asset($allMovie->movie_image)}}">
                                    </a>
                                </div>

                            <div class="movie__info">
                                <a href='{{url('/single-movie/'.$allMovie->id)}}' class="movie__title">{{$allMovie->movie_name}}  </a>
                                <br/>
                                <br/>

                                <p class="movie__time" style="color:green;border-bottom: 2px solid purple">{{$allMovie->duration}}</p>
                                <br/>

                                <p class="movie__option" style="color:blue;border-bottom: 2px solid blue"><a href="#">{{$allMovie->country_name}}</a></p>
                                <br/>
                                <br/>
                                <p class="movie__option"><a href="#">{{$allMovie->actor}}</a></p>
                                {{--<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>--}}


                            </div>
                            </div>
                  @php($i++)


                   @endif

                    @endforeach


                    <!-- Movie variant with time -->


                    <div class="row">
                        <div class="social-group">
                            <div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4">
                                <div class="social-group__head">Join <br>our social groups</div>
                                <div class="social-group__content">A lot of fun, discussions, queezes and contests among members.Always be first to know about best offers from cinemas and our partners</div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-4">


                                <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
                                    <h3 class="category__title">Best Movie Hall</h3>
                                    <ol>
                                        @foreach($best_halls as $best_hall)
                                        <li><a href="{{url('/single-hall/'.$best_hall->id)}}" class="category__item">{{$best_hall->hall_name}}</a></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-sm-6 col-md-4">
                                <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
                                    <h3 class="category__title">Stadium</h3>
                                    <ol>
                                        @foreach($best_stadiums as $best_stadium)
                                            <li><a href="{{url('/single-hall/'.$best_stadium->id)}}" class="category__item">{{$best_stadium->hall_name}}</a></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>

                <aside class="col-sm-4 col-md-3">
                    <div class="sitebar first-banner--left">
                        <div class="banner-wrap first-banner--left">
                            <a href="{{url('/all-sports')}}"><img alt='banner' src="{{asset('/front/')}}/images/banners/live_concert.jpg"></a>
                        </div>
                        <br/>

                        <div class="banner-wrap">
                            <a href="{{url('/all-offer')}}"><img alt='banner' src="{{asset('/front/')}}/images/banners/offer.jpg"></a>
                        </div>
                        <br/>

                        <div class="promo marginb-sm">
                            <div class="promo__head">SeeMyShow</div>
                            <div class="promo__describe">Book Ticket<br></div>
                            <div class="promo__content">
                                <ul>
                                    <li class="store-variant"><a>Favourite Movie</a></li>
                                    <li class="store-variant"><a>Live Match</a></li>
                                    <li class="store-variant"><a>Running Concert</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="banner-wrap banner-wrap--last">
                            <a href="{{url('/contact-us')}}"><img alt='banner' src="{{asset('/front/')}}/images/banners/contact.jpg"></a>
                        </div>
                        <br/>

                        <div class="promo marginb-sm">
                            <div class="promo__head">SeeMyShow</div>
                            <div class="promo__describe">share our website<br></div>
                            <div class="promo__content">
                                <ul>
                                    <li class="store-variant"><a href="#"><img alt='' src="{{asset('/front/')}}/images/apple-store.svg"></a></li>
                                    <li class="store-variant"><a href="#"><img alt='' src="{{asset('/front/')}}/images/google-play.svg"></a></li>
                                    <li class="store-variant"><a href="#"><img alt='' src="{{asset('/front/')}}/images/windows-store.svg"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>

        <div class="clearfix"></div>



        <h2 id='target' class="page-heading heading--outcontainer">UpComing cinema</h2>
        <div class="col-sm-12">
            <div class="row">


            @foreach($upmovies as $upmovie)

                    <!-- Movie variant with time -->
                <div class="col-sm-4 col-md-3" style=margin-bottom:10px;>
                     <div class="">
                                <div class="">
                                    <a href="{{url('/single-movie/'.$upmovie->id)}}" class="movie-beta__link">
                                        <img style="height: 300px;width: 250px" alt='' src="{{asset($upmovie->movie_image)}}">
                                    </a>
                                </div>




                            </div>

                </div>

        @endforeach




            </div>
        </div>

        <div class="clearfix"></div>

        <h2 id='target' class="page-heading heading--outcontainer">FAQ</h2>
        <div class="col-sm-10">
            <div class="container demo">


                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach($faqs as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                     {{$faq->name}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{$faq->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                {{$faq->description}}

                            </div>
                        </div>
                    </div>

                @endforeach

                </div><!-- panel-group -->


            </div><!-- container -->
        </div>

        <div class="clearfix"></div>

        <h2 id='target' class="page-heading heading--outcontainer">Live Match Ticket</h2>
        <div class="col-sm-12">
            <div class="row">

                <!-- Movie variant with time -->


                @foreach($categoriesSports as $categoriesSport)




                        <div class="movie movie--test movie--test--dark movie--test--left">

                            <div class="movie__images">
                                <a href="{{url('/single-movie/'.$categoriesSport->id)}}" class="movie-beta__link">
                                    <img alt='' style="height: 200px;width: 400px" src="{{asset($categoriesSport->movie_image)}}">
                                </a>
                            </div>

                            <div class="movie__info">
                                <a href='{{url('/single-movie/'.$categoriesSport->id)}}' class="movie__title">{{$categoriesSport->movie_name}}  </a>

                                <p class="movie__option" style="color: #00A8FF">{{$categoriesSport->actor}}</p>

                                <p class="movie__option"><strong>Date: </strong>{{$categoriesSport->duration}}</p>
                                <p class="movie__option"><strong>Sponsor By: </strong><a href="#">{{$categoriesSport->director}}</a></p>


                            </div>
                        </div>
              @endforeach
            </div>






            </div>


        <div class="clearfix"></div>




        <div class="col-sm-12">
            <h2 class="page-heading">Latest news</h2>

            @foreach($newS as $news)
            <div class="col-sm-4 similar-wrap col--remove">

                <div class="post post--preview post--preview--wide">
                    <div class="col-sm-6">
                        <a href="{{url('/single-news/'.$news->id)}}"><img alt='' src="{{asset($news->news_image)}}"></a>

                    </div>
                </div>

                    <div class="col-sm-6">
                        <p class="post__date">{{$news->created_at}}</p>
                        <p  style="color: #00A8FF" class="post__title">"{{$news->news_title}}"</p>
                        <p  style="color: #2ab27b" class="post__title">- {{$news->author_name}}</p>
                        <a href="{{url('/single-news/'.$news->id)}}" class="btn read-more post--btn">read more</a>

                </div>
            </div>

            @endforeach

        </div>

    </section>


    <div class="clearfix"></div>

@endsection