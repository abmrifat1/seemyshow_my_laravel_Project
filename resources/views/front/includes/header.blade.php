<header class="header-wrapper header-wrapper--home">
    <div class="container">
        <!-- Logo link-->
        <a href="{{url('/')}}" class="logo">
            <img alt='logo' src="{{asset('/front/')}}/images/banners/main_logo.png" style="height: 35px">
        </a>

        <!-- Main website navigation-->
        <nav id="navigation-box">
            <!-- Toggle for mobile menu mode -->
            <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
            </a>

            <!-- Link navigation -->
            <ul id="navigation">

                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/all-category')}}">ShoW</a>
                    <ul>
                        @foreach($publishedShowings as $publishedShowing)

                           <li class="menu__nav-item"><a href="{{url('/movie-category/'.$publishedShowing->id)}}">{{ $publishedShowing->status_name }}</a></li>
                        @endforeach
                            @foreach($publishedCategories as $publishedCategory)

                                <li class="menu__nav-item"><a href="{{url('/movie-category-all/'.$publishedCategory->id)}}">{{ $publishedCategory->category_name }}</a></li>
                            @endforeach
                    </ul>
                </li>

                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/all-sports')}}">Sports and Concert</a>

                </li>

                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/all-hall')}}">Cinema Hall</a>
                    {{--<ul>--}}
                        {{--<li class="menu__nav-item"><a href="gallery-four.html">4 col gallery</a></li>--}}

                    {{--</ul>--}}
                </li>

                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/all-news')}}">News</a>
                    {{--<ul>--}}
                        {{--<li class="menu__nav-item"><a href="gallery-four.html">4 col gallery</a></li>--}}

                    {{--</ul>--}}
                </li>



                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/gallery_page')}}">Gallery</a>
                </li>
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/all-offer')}}">Offers</a>
                    {{--<ul>--}}
                        {{--<li class="menu__nav-item"><a href="news-left.html">News (rigth sidebar)</a></li>--}}
                        {{--<li class="menu__nav-item"><a href="news-right.html">News (left sidebar)</a></li>--}}
                        {{--<li class="menu__nav-item"><a href="news-full.html">News (full widht)</a></li>--}}
                        {{--<li class="menu__nav-item"><a href="single-page-left.html">Single post (rigth sidebar)</a></li>--}}
                        {{--<li class="menu__nav-item"><a href="single-page-right.html">Single post (left sidebar)</a></li>--}}
                        {{--<li class="menu__nav-item"><a href="single-page-full.html">Single post (full widht)</a></li>--}}
                    {{--</ul>--}}
                </li>
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="{{url('/contact-us')}}">Contact US</a>
                    {{--<ul class="mega-menu container">--}}
                        {{--<li class="col-md-3 mega-menu__coloum">--}}
                            {{--<h4 class="mega-menu__heading">Now in the cinema</h4>--}}
                            {{--<ul class="mega-menu__list">--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">The Counselor</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Bad Grandpa</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Blue Is the Warmest Color</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Capital</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Spinning Plates</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Bastards</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">--}}
                            {{--<ul class="mega-menu__list">--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Gravity</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Captain Phillips</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Carrie</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Cloudy with a Chance of Meatballs 2</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="col-md-3 mega-menu__coloum">--}}
                            {{--<h4 class="mega-menu__heading">Ending soon</h4>--}}
                            {{--<ul class="mega-menu__list">--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Escape Plan</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Rush</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Prisoners</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Enough Said</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">The Fifth Estate</a></li>--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Runner Runner</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}

                        {{--<li class="col-md-3 mega-menu__coloum mega-menu__coloum--outheading">--}}
                            {{--<ul class="mega-menu__list">--}}
                                {{--<li class="mega-menu__nav-item"><a href="#">Insidious: Chapter 2</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </li>
            </ul>
        </nav>

        <!-- Additional header buttons / Auth and direct link to booking-->
        <div class="control-panel">

                @if(Session::get('customerId'))

                <a href="{{url('/customer_logout')}}" class="btn btn-md btn--warning "><span style="color: green;front-width:700px">{{Session::get('customerName')}}</span> | Log Out</a>
                <a href="{{url('/customer_profile')}}" class="btn btn-md btn--warning "><span style="color: brown;front-width:700px">Profile</span></a>

            @else

                <a href="{{url('/home-new-customer')}}" class="btn btn-md btn--warning ">Log In</a>

            @endif
        </div>

    </div>
</header>