<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">

                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ asset('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Show Category Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-category') }}">Add Show Category</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-category') }}">Manage Show Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Show Showing Status Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-showing') }}">Add Showing Status</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-showing') }}">Manage Showing Status</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Show Place <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-movie-hall') }}">Add Show Place</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-movie-hall') }}">Manage Show Place</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Show  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-movie') }}">Add Show </a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-movie') }}">Manage Show </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ticket Shift  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-shift') }}">Add Ticket Shift </a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-shift') }}">Manage Ticket Shift </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Seat Type  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-seat') }}">Add Seat Type </a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-seat') }}">Manage Seat Type </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> NEWS <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-news') }}">Add News</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-news') }}">Manage News</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Place Category Name <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-sport') }}">Add Place Category</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-sport') }}">Manage Place Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> FAQ <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-faq') }}">Add FAQ</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-faq') }}">Manage FAQ</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="{{ url('/show-customer') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Customer  <span class="fa arrow"></span></a>



                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="{{ url('/manage-message') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Customer Message <span class="fa arrow"></span></a>



                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="{{ url('/view-bkash') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Bkash Transition ID <span class="fa arrow"></span></a>



                <!-- /.nav-second-level -->
            </li>

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stadium <span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/add-stadium') }}">Add Stadium </a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/manage-stadium') }}">Manage Stadium</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Live Match <span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/add-match') }}">Add Match </a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/manage-match') }}">Manage Match</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> OFFER <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/add-offer') }}">Add Offer</a>
                    </li>
                    <li>
                        <a href="{{ url('/manage-offer') }}">Manage Offer</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
             <li>

                <a href="{{url('/order_info')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Order Info <span class="fa arrow"></span></a>

                <!-- /.nav-second-level -->
            </li>

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info <span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/add-product') }}">Add Product</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/manage-product') }}">Manage Product</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>