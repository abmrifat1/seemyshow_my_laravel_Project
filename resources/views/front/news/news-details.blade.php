@extends('front.master')
@section('title')
    News Details
@endsection

@section('content')



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->
    <section class="container">
        <div class="col-sm-12">
            <h2 class="page-heading">Single post</h2>

            <div class="post">
                <div class="post__preview">
                    <div class="">
                        <div class="">
                            <!--First Slide-->

                            <div class="row">
                                <div class="col-md-12">
                            <div class="swiper-slide">
                                <img alt='' src="{{asset($news_details->author_image)}}">
                            </div>
                                </div>
                            </div>


                        </div><!-- end swiper wrapper-->
                    </div><!-- end swiper container -->



                </div>

                <h1>{{$news_details->news_title}}</h1>
                <p class="post__date">{{$news_details->created_at}}</p>

                <div class="wave-devider"></div>

                  <p>{{$news_details->news_description}}</p>
                 <div class="col-sm-12 col-md-8">
                    <blockquote class="quote quote--intext">
                        <br/>
                        {{$news_details->news_title}}
                        <br/><br><small class="quote__author"><span style="font-size: 20px;color: #00A8FF" class="quote__author-name">{{$news_details->author_name}}</span></small>
                    </blockquote>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="post__images post__images--right  pull-right">
                        <img alt='' style="height: 200px;width: 350px" src="{{asset($news_details->news_image)}}">
                    </div>
                </div>

              <div class="clearfix"></div>

                <div class="info-wrapper">
                    <div class="tags">
                        <ul>
                            <li class="item-wrap"><a href="{{url('/all-news')}}" style="color: #FFD564;font-size: 20px" class="tags__item">news</a></li>
                            <li class="item-wrap"><a href="{{url('/all-category')}}" style="color: #FFD564;font-size: 20px" class="tags__item">movie</a></li>
                            <li class="item-wrap"><a href="{{url('/all-hall')}}" style="color: #FFD564;font-size: 20px" class="tags__item">ceremony hall</a></li>
                            <li class="item-wrap"><a href="{{url('/all-sports')}}" style="color: #FFD564;font-size: 20px" class="tags__item">Sports and Concert</a></li>
                        </ul>
                    </div>
                    <div class="share">
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="page-heading">Similar posts</h2>
            @foreach($relatedNews as $relatedNew)

            <div class="col-sm-4 col--remove">
                <div class="post post--preview post--preview--full">
                    <div class="post__image">
                        <a href="{{url('/single-news/'.$relatedNew->id)}}"><img alt='' src="{{asset($relatedNew->news_image)}}"></a>

                    </div>
                    <p class="post__date">{{$relatedNew->created_at}} </p>
                    <a href="#" class="post__title">"{{$relatedNew->news_title}}" - <span style="color:#00A8FF">{{$relatedNew->author_name}}</span></a>
                    <a href="{{url('/single-news/'.$relatedNew->id)}}" class="btn read-more post--btn">read more</a>
                </div>
            </div>

            @endforeach

            <div class="clearfix"></div>

            {{--<div class="comment-wrapper">--}}
                {{--<form id="comment-form" class="comment-form" method='post'>--}}
                    {{--<textarea class="comment-form__text" placeholder='Add you comment here'></textarea>--}}
                    {{--<label class="comment-form__info">250 characters left</label>--}}
                    {{--<button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>--}}
                {{--</form>--}}

                {{--<div class="comment-sets">--}}

                    {{--<div class="comment">--}}
                        {{--<div class="comment__images">--}}
                            {{--<img alt='' src="{{asset('/front/')}}/images/comment/avatar.jpg">--}}
                        {{--</div>--}}

                        {{--<a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Roberta Inetti</a>--}}
                        {{--<p class="comment__date">today | 03:04</p>--}}
                        {{--<p class="comment__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae enim sollicitudin, euismod erat id, fringilla lacus. Cras ut rutrum lectus. Etiam ante justo, volutpat at viverra a, mattis in velit. Morbi molestie rhoncus enim, vitae sagittis dolor tristique et.</p>--}}
                        {{--<a href='#' class="comment__reply">Reply</a>--}}
                    {{--</div>--}}
                    {{----}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>


    <div class="clearfix"></div>
@endsection