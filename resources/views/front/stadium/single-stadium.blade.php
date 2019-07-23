@extends('front.master')
@section('title')
Stadium
@endsection

@section('content')



<div class="clearfix" style="padding-bottom: 55px"></div>
<!-- Search bar -->


<!-- Main content -->

<section class="cinema-container">


    <div class="cinema cinema--full">
        <p class="cinema__title">{{$stadium_details->stadium_name}}</p>
        <div class="cinema__rating">5.0</div>
        <div class="cinema__gallery">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!--First Slide-->

                    <img alt='' style="text-align: center;height: 400px;width: 750px" src="{{asset($stadium_details->stadium_image)}}">

                </div>
            </div>
        </div>
        <div class="cinema__info">
            <p class="cinema__info-item"><strong>Address:</strong> {{$stadium_details->stadium_address}}</p>
            <p class="cinema__info-item"><strong>Phone:</strong> {{$stadium_details->stadium_phone}}</p>
            <p class="cinema__info-item"><strong>Official website:</strong> <a href="#">{{$stadium_details->stadium_website}}</a></p>
        </div>
    </div>



    <div class="share share--centered">
        <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        </div>
    </div>

    <div class="tabs tabs--horisontal">
        <!-- Nav tabs -->
        <div class="container">
            <ul class="nav nav-tabs" id="hTab">
                <li><a href="#movie1" data-toggle="tab">Movies</a></li>
                <li><a href="#comment1" data-toggle="tab">Comments</a></li>
                <li class="active"><a href="#map1" data-toggle="tab">Map</a></li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane" id="movie1">
                <div class="container">
                    <div class="movie-time-wrap">

                        <div class="datepicker">
                            <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                            <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.1</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time1.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">Gravity (2013) </a>

                                        <p class="movie__time">91 min</p>

                                        <p class="movie__option"><a href="#">Drama</a> | <a href="#">Sci-Fi</a> | <a href="#">Thriller</a></p>
                                    </div>
                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">5.0</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time2.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">The Hobbit:  The Desolation of Smaug (2013) </a>

                                        <p class="movie__time">169 min</p>

                                        <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Fantazy</a> | <a href="#">Drama</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.9</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time3.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">The Hunger Games:  Catching Fire (2013)</a>

                                        <p class="movie__time">149 min</p>

                                        <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Action</a> | <a href="#">Sci-Fi</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.9</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time4.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">Thor: The Dark World  (2013) </a>

                                        <p class="movie__time">112 min</p>

                                        <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Fantazy</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.1</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time5.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">World War Z (2013) </a>

                                        <p class="movie__time">116 min</p>

                                        <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Horror</a> | <a href="#">Action</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.9</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time6.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">Prisoners (2013) </a>

                                        <p class="movie__time">153 min</p>

                                        <p class="movie__option"><a href="#">Crime</a> | <a href="#">Thriller</a> | <a href="#">Drama</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6">

                            <!-- Movie variant with time -->
                            <div class="movie movie--time">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="movie__images">
                                            <span class="movie__rating">4.6</span>
                                            <img alt='' src="{{asset('/front/')}}/images/movie/movie-time7.jpg">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-7">
                                        <a href='movie-page-left.html' class="movie__title">This Is the End (2013)  </a>

                                        <p class="movie__time">107 min</p>

                                        <p class="movie__option"><a href="#">Comedy</a> | <a href="#">Fantazy</a></p>
                                    </div>

                                    <div class="time-select">
                                        <ul class="items-wrap">
                                            <li class="time-select__item" data-time='09:40'>09:40</li>
                                            <li class="time-select__item" data-time='13:45'>13:45</li>
                                            <li class="time-select__item" data-time='15:45'>15:45</li>
                                            <li class="time-select__item" data-time='19:50'>19:50</li>
                                            <li class="time-select__item" data-time='21:50'>21:50</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Movie variant with time -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="comment1">
                <div class="container">
                    <div class="comment-wrapper">
                        <form id="comment-form" class="comment-form" method='post'>
                            <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                            <label class="comment-form__info">250 characters left</label>
                            <button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>
                        </form>

                        <div class="comment-sets comment--light">

                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="{{asset('/front/')}}/images/comment/avatar.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                                <p class="comment__date">today | 03:04</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="{{asset('/front/')}}/images/comment/avatar-olia.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                                <p class="comment__date">22.10.2013 | 14:40</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div class="comment comment--answer">
                                <div class="comment__images">
                                    <img alt='' src="{{asset('/front/')}}/images/comment/avatar-dmitriy.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Dmitriy Pustovalov</a>
                                <p class="comment__date">today | 10:19</p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div class="comment comment--last">
                                <div class="comment__images">
                                    <img alt='' src="{{asset('/front/')}}/images/comment/avatar-sia.jpg">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Sia Andrews</a>
                                <p class="comment__date"> 22.10.2013 | 12:31 </p>
                                <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                <a href='#' class="comment__reply">Reply</a>
                            </div>

                            <div id='hide-comments' class="hide-comments">
                                <div class="comment">
                                    <div class="comment__images">
                                        <img alt='' src="{{asset('/front/')}}/images/comment/avatar.jpg">
                                    </div>

                                    <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>
                                    <p class="comment__date">today | 03:04</p>
                                    <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                    <a href='#' class="comment__reply">Reply</a>
                                </div>

                                <div class="comment">
                                    <div class="comment__images">
                                        <img alt='' src="{{asset('/front/')}}/images/comment/avatar-olia.jpg">
                                    </div>

                                    <a href='#' class="comment__author"><span class="social-used fa fa-vk"></span>Olia Gozha</a>
                                    <p class="comment__date">22.10.2013 | 14:40</p>
                                    <p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>
                                    <a href='#' class="comment__reply">Reply</a>
                                </div>
                            </div>

                            <div class="comment-more">
                                <a href="#" class="watchlist">Show more comments</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active" id="map1">
                <div id='cinema-map' class="map"></div>
            </div>
        </div>
    </div>

</section>




<div class="clearfix"></div>
@endsection