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
    <title>StudyPress | Education & Courses HTML Template</title>

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
        <div class="header-top bg-theme-color-2 sm-text-center p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget no-border m-0">
                            <ul class="list-inline font-13 sm-text-center mt-5">
                                <li>
                                    <a class="text-white" href="#">FAQ</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#">Help Desk</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                            <ul class="list-inline pull-right">
                                <li class="mb-0 pb-0">
                                    <div class="top-dropdown-outer pt-5 pb-10">
                                        <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (12)</a>
                                        <ul class="dropdown">
                                            <li>
                                                <!-- dropdown cart -->
                                                <div class="dropdown-cart">
                                                    <table class="table cart-table-list table-responsive">
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#"><img alt="" src="themes/images/products/sm1.jpg"></a></td>
                                                            <td><a href="#"> Product Title</a></td>
                                                            <td>X3</td>
                                                            <td>$ 100.00</td>
                                                            <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#"><img alt="" src="images/products/sm2.jpg"></a></td>
                                                            <td><a href="#"> Product Title</a></td>
                                                            <td>X2</td>
                                                            <td>$ 70.00</td>
                                                            <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="total-cart text-right">
                                                        <table class="table table-responsive">
                                                            <tbody>
                                                            <tr>
                                                                <td>Cart Subtotal</td>
                                                                <td>$170.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping and Handling</td>
                                                                <td>$20.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Order Total</td>
                                                                <td>$190.00</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="cart-btn text-right">
                                                        <a class="btn btn-theme-colored btn-xs" href="shop-cart.html"> View cart</a>
                                                        <a class="btn btn-dark btn-xs" href="shop-checkout.html"> Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown cart ends -->
                                            </li>
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
                        <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                            <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                            </ul>
                        </div>
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
                            <li><a href="{!! url('/home') !!}">{!! trans('label.home') !!}</a></li>
                            <li><a href="ja/home/dontito/html.kodesolution.live/s/studypress/v6.0/demo/js/chart.jsvascript:void(0)">{!! trans('label.course') !!}</a>
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


                            <li><a href="#">{!! trans('label.about') !!}</a>

                            </li>
                            <li><a href="#">{!! trans('label.contact_us') !!}</a>

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


@php
    $partners = \App\Models\Information\Partner::all();
    $about = \App\Models\Information\About::get()->first();
@endphp
    <!-- Divider: Clients -->
    <section class="clients bg-theme-color-2">
        <div class="container pt-10 pb-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->
                    <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
                        @foreach($partners as $partner)
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <div class="container pt-70 pb-40">
            <div class="row">
                <div class="col-md-4">
                    <img src="{!! url('assets/images/content/logo.png') !!}" alt="">
                    <p class="font-12 mt-20 mb-20">{!! truncateString($about->utangulizi) !!}</p>
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
