@extends('front.master')
@section('title')
    Sports Details
@endsection

@section('content')

    <div style="padding: 28px"></div>

    <section class="container">
        <div class="col-sm-12">
            <div class="movie">
                <h2 class="page-heading">{{$sports_details->match_name}}</h2>

                <div class="movie__info">
                    <div class="col-sm-4 col-md-3 movie-mobile">
                        <div class="movie__images">
                            <span class="movie__rating">5.0</span>
                            <img alt='' style="height: 280px" src="{{asset($sports_details->match_image)}}">
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-9">
                        <p class="movie__option" style="color: #00A8FF">{{$sports_details->match_status}}</p>

                        <p class="movie__option"><strong>Team: </strong><a href="#">{{$sports_details->team}}</a></p>
                        <p class="movie__option"><strong>Date: </strong><a href="#">{{$sports_details->date}}</a></p>
                        <p class="movie__option"><strong>Time: </strong><a href="#">{{$sports_details->time}}</a></p>
                        <p class="movie__option"><strong>Satdium: </strong><a href="#">{{$sports_details->stadium_name}}</a></p>
                        <p class="movie__option"><strong>Sponsor: </strong><a href="#">{{$sports_details->sponsor}}</a></p>
                        <p class="movie__option"><strong>Available Ticket: </strong><a href="#">{{$sports_details->ticket}}</a></p>
                        <p class="movie__option"><strong>Ticket Status: </strong><a href="#">{{$sports_details->ticket_status}}</a></p>

                        <a href="#" class="comment-link">Comments:  15</a>

                        {{--<div class="movie__btns movie__btns--full">--}}
                            {{--<a href="#" class="btn btn-md btn--warning">book a ticket for this movie</a>--}}
                            {{--<a href="#" class="watchlist">Add to watchlist</a>--}}
                        {{--</div>--}}

                        <div class="share">
                            <span class="share__marker">Share: </span>
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <h2 class="page-heading">The plot</h2>

                <p class="movie__describe">Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through treacherous lands swarming with Goblins and Orcs, deadly Wargs and Giant Spiders, Shapeshifters and Sorcerers. Although their goal lies to the East and the wastelands of the Lonely Mountain first they must escape the goblin tunnels, where Bilbo meets the creature that will change his life forever ... Gollum. Here, alone with Gollum, on the shores of an underground lake, the unassuming Bilbo Baggins not only discovers depths of guile and courage that surprise even him, he also gains possession of Gollum's "precious" ring that holds unexpected and useful qualities ... A simple, gold ring that is tied to the fate of all Middle-earth in ways Bilbo cannot begin to ... </p>



            </div>


                <!-- hiden maps with multiple locator-->


                <h2 id='target' class="page-heading heading--outcontainer">All {{$sports_category->sports_name}}</h2>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8 col-md-9">
                            <!-- Movie variant with time -->

                            @php( $i=0)
                            @foreach($category_sports as $category_sport)


                                @if($i==0 || $i==1 || $i==4 || $i==5)

                                    <div class="movie movie--test movie--test--dark movie--test--left">
                                        <div class="movie__images">
                                            <a href="{{asset($category_sport->match_image)}}" class="movie-beta__link">
                                                <img alt='' style="height: 200px" src="{{asset($category_sport->match_image)}}">
                                            </a>
                                        </div>

                                        <div class="movie__info">
                                            <a href='{{url('/single-sports/'.$category_sport->id)}}' class="movie__title">{{$category_sport->match_name}}  </a>

                                            <p class="movie__option" style="color:#00A8FF;">{{$category_sport->match_status}}</p>
                                            <p class="movie__option">{{$category_sport->date}}</p>
                                            <p class="movie__option"><strong>Available Ticket: </strong><a href="#">{{$sports_details->ticket}}</a></p>

                                        </div>
                                    </div>

                                    @php($i++)


                                @else

                                    <div class="movie movie--test movie--test--dark movie--test--left">
                                        <div class="movie__images">
                                            <a href="{{url('/single-sports/'.$category_sport->id)}}" class="movie-beta__link">
                                                <img alt='' src="{{asset($category_sport->match_image)}}">
                                            </a>
                                        </div>

                                        <div class="movie__info">
                                            <a href='{{asset($category_sport->match_image)}}' class="movie__title">{{$category_sport->match_name}}  </a>

                                            <p class="movie__option" style="color:#00A8FF;">{{$category_sport->match_status}}</p>
                                            <p class="movie__option">{{$category_sport->date}}</p>
                                            <p class="movie__option">{{$category_sport->stadium_name}}</p>




                                        </div>
                                    </div>
                        </div>


                        @endif

                        @endforeach




                    </div>
                </div>

                <div class="clearfix"></div>

                <h2 class="page-heading">comments (15)</h2>

                <div class="comment-wrapper">
                    <form id="comment-form" class="comment-form" method='post'>
                        <textarea class="comment-form__text" placeholder='Add you comment here'></textarea>
                        <label class="comment-form__info">250 characters left</label>
                        <button type='submit' class="btn btn-md btn--danger comment-form__btn">add comment</button>
                    </form>

                    <div class="comment-sets">

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


    </section>

    <div class="clearfix"></div>
@endsection