<!doctype html>
<html>

<!-- Mirrored from amovie.gozha.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 04:46:47 GMT -->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="SEEMYSHOW">
    <meta name="keywords" content="Khorsed Alam, Abdur Rouf, Harun-UR-Rashid">
    <meta name="author" content="AbmRifat">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href="{{asset('/front/')}}/css/external/idangerous.swiper.css" rel="stylesheet" />

    <!-- Mobile menu -->
    <link href="{{asset('/front/')}}/css/gozha-nav.css" rel="stylesheet" />

    <!-- Select -->
    <link href="{{asset('/front/')}}/css/external/jquery.selectbox.css" rel="stylesheet" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/rs-plugin/css/settings.css" media="screen" />

    <!-- Custom -->
    <link href="{{asset('/front/')}}/css/style3860.css?v=1" rel="stylesheet" />

    <link href="{{asset('/front/')}}/css/faq1.css" rel="stylesheet" />


    <!-- Modernizr -->
    <script src="{{asset('/front/')}}/js/external/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">
    <!-- Banner -->
    {{--<div class="banner-top">--}}
        {{--<img alt='top banner' src="{{asset('/front/')}}/images/banners/">--}}
    {{--</div>--}}

    <!-- Header section -->
    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
</div>

<!-- open/close -->
<div class="overlay overlay-hugeinc">

    <section class="container">

        <div class="col-sm-4 col-sm-offset-4">
            <button type="button" class="overlay-close">Close</button>
            <form id="login-form" class="login" method='get' novalidate=''>
                <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                <div class="social social--colored">
                    <a href='#' class="social__variant fa fa-facebook"></a>
                    <a href='#' class="social__variant fa fa-twitter"></a>
                    <a href='#' class="social__variant fa fa-tumblr"></a>
                </div>

                <p class="login__tracker">or</p>

                <div class="field-wrap">
                    <input type='email' placeholder='Email' name='user-email' class="login__input">
                    <input type='password' placeholder='Password' name='user-password' class="login__input">

                    <input type='checkbox' id='#informed' class='login__check styled'>
                    <label for='#informed' class='login__check-info'>remember me</label>
                </div>

                <div class="login__control">
                    <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                    <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                </div>
            </form>
        </div>

    </section>
</div>

<!-- JavaScript-->
<!-- jQuery 1.9.1-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('/front/')}}/js/external/jquery-1.10.1.min.js"><\/script>')</script>
<!-- Migrate -->
<script src="{{asset('/front/')}}/js/external/jquery-migrate-1.2.1.min.js"></script>
<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Bootstrap 3-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

<!-- jQuery REVOLUTION Slider -->
<script type="text/javascript" src="{{asset('/front/')}}/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="{{asset('/front/')}}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="{{asset('/front/')}}/js/external/idangerous.swiper.min.js"></script>
<!-- Mobile menu -->
<script src="{{asset('/front/')}}/js/jquery.mobile.menu.js"></script>

<script src="{{asset('/front/')}}/js/mag.js"></script>
<!-- Select -->
<script src="{{asset('/front/')}}/js/external/jquery.selectbox-0.2.min.js"></script>

<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>

<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

<!-- Stars rate -->
<script src="{{asset('/front/')}}/js/external/jquery.raty.js"></script>

<!-- Swiper slider -->
<script src="{{asset('/front/')}}/js/external/idangerous.swiper.min.js"></script>

<!-- Form element -->
<script src="{{asset('/front/')}}/js/external/form-element.js"></script>
<!-- Form validation -->
<script src="{{asset('/front/')}}/js/form.js"></script>

<!-- Twitter feed -->
<script src="{{asset('/front/')}}/js/external/twitterfeed.js"></script>

<!-- Custom -->
<script src="{{asset('/front/')}}/js/custom.js"></script>
<script src="{{asset('/front/')}}/js/faq1.js"></script>

<!-- Share buttons -->
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>

<!--*** Google map  ***-->
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<!--*** Google map infobox  ***-->
<script src="{{asset('/front/')}}/js/external/infobox.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        init_BookingTwo();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        init_Home();
        jQuery('.movie__media-item').magnificPopup({
            type: 'iframe'});
    });
</script>
</body>

<!-- Mirrored from amovie.gozha.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 04:48:05 GMT -->
</html>
