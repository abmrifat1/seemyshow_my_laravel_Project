<footer class="footer-wrapper">
    <section class="container">
        <div class="col-xs-4 col-md-2 footer-nav">
            <ul class="nav-link">
                <li><a href="{{url('/all-category')}}" class="nav-link__item">Movies</a></li>
                <li><a href="{{url('/all-sports')}}" class="nav-link__item">Live show</a></li>
                <li><a href="{{url('/all-hall')}}" class="nav-link__item">Cinema hall</a></li>
                <li><a href="{{url('/all-hall')}}" class="nav-link__item">Stadium</a></li>



            </ul>
        </div>
        <div class="col-xs-4 col-md-2 footer-nav">
            <ul class="nav-link">
                <li><a href="{{url('/movie-category/'.(1))}}" class="nav-link__item">Running Movie</a></li>
                <li><a href="{{url('/movie-category/'.(2))}}" class="nav-link__item">Coming soon</a></li>
                <li><a href="{{url('/movie-category/'.(3))}}" class="nav-link__item">Latest Show</a></li>
                <li><a href="{{url('/all-offer')}}" class="nav-link__item">Best offers</a></li>
            </ul>
        </div>
        <div class="col-xs-4 col-md-2 footer-nav">
            <ul class="nav-link">
                <li><a href="{{'/all-news'}}" class="nav-link__item">News</a></li>
                <li><a href="{{'/gallery_page'}}" class="nav-link__item">Gallery</a></li>
                <li><a href="{{'/home-new-customer'}}" class="nav-link__item">Log In</a></li>
                <li><a href="{{url('/contact-us')}}" class="nav-link__item">Contacts</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="footer-info">
                <p class="heading-special--small">SeeMyShow <br><span class="title-edition">See your Show Timely</span></p>

                <div class="clearfix"></div>
                <p class="copy">&copy; See My Show 2018. All rights reserved. Done by DIU</p>
            </div>
        </div>
    </section>
</footer>