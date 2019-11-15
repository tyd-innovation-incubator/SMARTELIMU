<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/features-header-style3.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 21 Oct 2019 07:32:39 GMT -->
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="StudyPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>SMART ELIMU |ELIMU NI UHALISIA,IPATE</title>

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{!! url('assets/images/content/logo1.png') !!}">
    <link rel="apple-touch-icon" href="{!! url('assets/images/content/logo1.png') !!}">
    <link href="{!! url('themes/images/apple-touch-icon-72x72.png') !!}" rel="apple-touch-icon" sizes="72x72">
    <link href="{!! url('themes/images/apple-touch-icon-114x114.png') !!}" rel="apple-touch-icon" sizes="114x114">
    <link href="{!! url('themes/images/apple-touch-icon-144x144.png') !!}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{!! url('themes/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! url('themes/css/jquery-ui.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! url('themes/css/animate.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! url('themes/css/css-plugin-collections.css') !!}" rel="stylesheet"/>

    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{!! url('themes/css/menuzord-skins/menuzord-rounded-boxed.css') !!}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{!! url('themes/css/style-main.css') !!}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{!! url('themes/css/preloader.css') !!}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{!! url('themes/css/custom-bootstrap-margin-padding.css') !!}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{!! url('themes/css/responsive.css') !!}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="{!! url('themes/css/colors/theme-skin-color-set-1.css') !!}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{!! url('themes/js/jquery-2.2.4.min.js') !!}"></script>
    <script src="{!! url('themes/js/jquery-ui.min.js') !!}"></script>
    <script src="{!! url('themes/js/bootstrap.min.js') !!}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{!! url('themes/js/jquery-plugin-collection.js') !!}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    {{--<div id="preloader">--}}
        {{--<div id="spinner">--}}
            {{--<div class="preloader-dot-loading">--}}
                {{--<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>--}}
    {{--</div>--}}

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-color-2 sm-text-center p-0" style="padding-bottom: 30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget no-border m-0">
                            <ul class="list-inline font-13 sm-text-center mt-5">


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">

                        </div>
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                            <ul class="list-inline pull-right">
                                <li class="mb-0 pb-0">
                                    <div class="top-dropdown-outer pt-5 pb-10">
                                        <button type="button" class="btn btn-md btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <img src="{!! url('img/flags/png/england.png') !!}" alt="UK">English <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><img src="{!! url('img/flags/png/england.png') !!}" alt="UK">English</a></li>
                                            <li><a href="#"><img src="{!! url('img/flags/png/de.png') !!}" alt="GER">German</a></li>
                                            <li><a href="#"><img src="{!! url('img/flags/png/pl.png') !!}" alt="PL">Polish</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-0 pb-0">
                                    <div class="top-dropdown-outer pt-5 pb-10">
                                        <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                                        <ul class="dropdown">
                                            <li>
                                                <div class="search-form-wrapper">
                                                    <form method="get" class="mt-10">
                                                        <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                                                        <label><input type="submit" name="submit" value=""></label>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
{{--                        <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">--}}
{{--                                <button type="button" class="btn btn-md btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
{{--                                    <img src="{!! url('img/flags/png/england.png') !!}" alt="UK">English <i class="fa fa-angle-down"></i>--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu" role="menu">--}}
{{--                                    <li><a href="#"><img src="{!! url('img/flags/png/england.png') !!}" alt="UK">English</a></li>--}}
{{--                                    <li><a href="#"><img src="{!! url('img/flags/png/de.png') !!}" alt="GER">German</a></li>--}}
{{--                                    <li><a href="#"><img src="{!! url('img/flags/png/pl.png') !!}" alt="PL">Polish</a></li>--}}
{{--                                </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord orange">
                        <a class="menuzord-brand pull-left flip mt-15" href="javascript:void(0)">
                            <img src="{!! url('assets/images/content/logo.png') !!}" alt="">
                        </a>
                        <ul class="menuzord-menu dark">
                            @auth

                                <li><a href="{!! url('/home') !!}">{!! trans('label.home') !!}</a></li>

                            @else
                                <li><a href="{!! url('/') !!}">{!! trans('label.home') !!}</a></li>

                            @endauth
                            <li><a href="">{!! trans('label.course') !!}</a>
                                <div class="megamenu">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="{!! route('lessons.primary') !!}"><i class="fa fa-list-ul"></i> {!! trans('label.primary_level') !!}</a></li>
                                                @foreach(code_value()->getPrimaryLevelPackages() as $package)
                                                    <li><a href="{!! route('lessons.view',$package->uuid) !!}">{!! $package->name !!}</a></li>

                                                    {{--<a href="{!! route('lessons.view',$package->uuid) !!}">{!! $package->name !!}</a>--}}

                                                @endforeach

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="{!! route('lessons.secondary') !!}"><i class="fa fa-list-ul"></i> {!! trans('label.secondary_level') !!}</a></li>

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="{!! route('lessons.extra_primary') !!}"><i class="fa fa-list-ul"></i> {!! trans('label.extra_primary') !!}</a></li>

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="{!! route('lessons.extra_secondary') !!}"><i class="fa fa-list-ul"></i> {!! trans('label.extra_secondary') !!}</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{!! route('news.search') !!}">{!! trans('label.news') !!}</a></li>


                            <li><a href="{!! route('information.about_us') !!}">{!! trans('label.about') !!}</a>

                            </li>
                            <li><a href="{!! route('information.contact_us') !!}">{!! trans('label.contact_us') !!}</a>

                            </li>


                            @guest
                            <li><a href="#">{!! trans('label.account') !!}</a>
                                <ul class="dropdown">
                                    <li>
                                        <a class="nav-link" href="{{ route('login') }}">{{ trans('label.login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a class="nav-link" href="{{ route('register') }}">{{ trans('label.register') }}</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            @else
                                <li>
                                    <a id="navbarDropdown"  href="#" >
                                        {{ Auth::user()->first_name }}  {{ Auth::user()->last_name }}
                                    </a>


                                        <ul class="dropdown">
                                            <li><a href="{!! route('profile.index') !!}"><i class="fa fa-user"></i> Taarifa za mtumiaji</a></li>
                                            <li><a href="{!! route('profile.packages') !!}"><i class="fa fa-user"></i> Orodha ya Masomo</a></li>
                                            <li><a href="{!! route('logout') !!}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> Ondoka</a></li>
                                        </ul>
                                        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                        {{--onclick="event.preventDefault();--}}
                                        {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                        {{--</a>--}}

                                        {{--<a class="dropdown-item" href="{{ route('logout') }}">--}}
                                        {{--<i class="fa fa-user"></i> Taarifa za mtumiaji--}}
                                        {{--</a>--}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                                @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- Start main-content -->

         @yield('content')
<!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <div class="container pt-70 pb-40">
            <div class="row">
                <div class="col-md-4">
                    <img src="{!! url('assets/images/content/logo.png') !!}" alt="">
                    <p class="font-12 mt-20 mb-20">{!! isset($about->utangulizi)? truncateString($about->utangulizi) : ''!!}</p>
                    <ul class="styled-icons flat medium list-inline mb-40">
                        <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="widget dark">
                        <h4 class="widget-title">Linki Muhimu</h4>
                        <ul class="list angle-double-right list-border">
                            <li><a href="#">Miradi yetu</a></li>
                            <li><a href="#">Wizara Ya Elimu</a></li>
                            <li><a href="#">Necta</a></li>
                            <li><a href="#">Nacte</a></li>
                            <li><a href="#">Tamisemi</a></li>
                            <li><a href="contact.html">Mawasiliano</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget dark">
                        <h4 class="widget-title">Kisheria</h4>
                        <ul class="list angle-double-right list-border">
                            <li><a href="#">Sera yetu</a></li>
                            <li><a href="#">Hatimiliki</a></li>
                            <li><a href="#">Kanzidata</a></li>
                            <li><a href="#">Katiba</a></li>
                            <li><a href="#">Cosota</a></li>
                            <li><a href="">Sheria ya Umiliki</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom" data-bg-color="#2f2f2f">
            <div class="container pt-15 pb-10">
                <div class="row">
                    <div class="col-md-6 offset-4">
                        <p class="font-11 text-black-777 m-0">Hatimiliki 2019 <a href="http://www.tyd.or.tz/">TYD Innovation incubator</a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{!! url('themes/js/custom.js') !!}"></script>

</body>

<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/features-header-style3.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 21 Oct 2019 07:32:39 GMT -->
</html>
