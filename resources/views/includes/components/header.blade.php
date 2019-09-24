<header class="main-header">

    {{--<div class="preloader"></div>--}}

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!-- Top Right -->
            <div class="top-right">
                <ul class="clearfix">
                    {{--@include("includes/partials/lang")--}}

                    <li><a href="#"><span class="icon lnr icon-call-in"></span>0787 275 482 | 0713 366 303
                        </a></li>
                    <li><a href="#"><span class="icon icon-envelope-open"></span> info@nextbyte.co.tz</a></li>
                </ul>
            </div>

        </div>
    </div><!-- Header Top End -->


    <!-- Header Lower -->
    <div class="header-lower fixed-top">
        <div class="auto-container">
            <!--Outer Box-->
            <div class="outer-box clearfix">

                <!-- Logo -->
                <div class="logo">
                    <a href="{!! url('/') !!}"><img src="{{ url("img/logo-nextsms.png") }}" alt="Digital Plus"></a>
                </div>

                <!--Default Btn-->
                <div class="btn-outer" style="right: 90px">
                    <a href="{{ route('login') }}" class="theme-btn default-btn">Login</a>
                </div>

                <div class="btn-outer" style="right: -30px">
                    <a href="{{ route('register') }}" class="theme-btn default-btn">Sign Up</a>
                </div>


                <!-- Main Menu -->
                <nav class="main-menu">

                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="top: 15px;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li><a href="{!! url('/') !!}">Home</a></li>
                            <li><a href="{!! route('resources.pricing') !!}">Pricing</a></li>
                            <li><a href="{!! route('resources.developers') !!}" target="_blank">Developers</a></li>
                            {{--<li><a href="services.html">Services</a></li>--}}
                            {{--<li class="dropdown"><a href="#">Pages</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="our-team.html">Our Team</a></li>--}}
                                    {{--<li><a href="careers.html">Careers</a></li>--}}
                                    {{--<li><a href="case-studies.html">Case Studies</a></li>--}}
                                    {{--<li><a href="case-studies-detail.html">Case Studies Detail</a></li>--}}
                                    {{--<li><a href="faqs.html">FAQs</a></li>--}}
                                    {{--<li><a href="pricing.html">Pricing</a></li>--}}
                                    {{--<li class="dropdown"><a href="faqs.html">Other</a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="404.html">404 Page</a></li>--}}
                                            {{--<li><a href="testimonials.html">Testimonials</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown"><a href="blog.html">Blog</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="blog.html">Blog</a></li>--}}
                                    {{--<li><a href="blog-details.html">Blog Single</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="{!! route('resources.contact_us') !!}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->

            </div>
        </div>
    </div><!-- Header Lower End-->

</header><!--End Main Header -->
