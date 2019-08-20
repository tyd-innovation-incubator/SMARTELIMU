<!DOCTYPE html>

<html class="no-js" lang="en"> <!--<![endif]-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Smart Elimu - Creative HTML Template">
    <meta name="author" content="Created by TYD Innovation">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{!! url('assets/images/content/logo1.png') !!}">
    <link rel="apple-touch-icon" href="{!! url('assets/images/content/logo1.png') !!}">

    <title>Smart Elimu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{!! url('assets/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! url('assets/css/style.css') !!}">
    <link href= "{!! url('assets/css/gothic/font.css') !!}" rel="stylesheet">
    <script src="{!! url('assets/js/modernizr.custom.js') !!}"></script>

</head>
<body class="cssAnimate ct-headroom--scrollUpMenu">
<div class="ct-preloader">
    <div class="ct-preloader-content"></div>
</div>
<nav class="ct-menuMobile">
    <ul class="ct-menuMobile-navbar">
        <li class="dropdown active"><a href = "{!! url('/') !!}">Nyumbani</a>
        </li>
        <li class="dropdown">
            <a>Masomo</a>
            <ul class="dropdown-menu">
                <li><a href="courses-listing.html">Masomo ya Shule Za Msingi</a></li>
                <li><a href="course-single.html">Darasa la 1</a></li>
                <li><a href="course-single2.html">Darasa la 2</a></li>
                <li><a href="course-single3.html">Darasa la 3</a></li>
                <li><a href="course-single4.html">Darasa la 4</a></li>
                <li><a href="course-single5.html">Darasa la 5</a></li>
                <li><a href="course-single6.html">Darasa la 6</a></li>
                <li><a href="course-single7.html">Darasa la 7</a></li>
                <li><a href="courses-listing2.html">Masomo ya Shule za Sekondari</a></li>
                <li><a href="courses-listing3.html">Masomo Ya ziada Msingi</a></li>
                <li><a href="courses-listing3.html">Masomo Ya ziada Sekondari</a></li>
            </ul>
        </li>
        <li><a href="features-typography.html">Wasifu Wetu</a>

        </li>
        <li><a href="{!! route('news.search') !!}">Habari</a>

        </li>
        <li><a href="contact.html">Wasiliana nasi</a></li>
    </ul>
</nav>
<div class="ct-navbarCart ct-navbarCart--mobile">
    <div class="ct-navbarCart--Info">
        <div class="media ct-navbarCart--Item ct-u-displayTable ct-hoverImage--rectangle">
            <a href="course-single.html">
                <div class="media-left">
                    <img class="media-object" src="{!! url('assets/images/content/itemCart1.jpg') !!}" alt="Item Cart">
                </div>
                <div class="media-body">
                    <h5 class="ct-navbarCart--itemName ct-fw-400">Smart Elimu</h5>
                    <span class="ct-navbarCart--itemPrice ct-u-colorMotive">90x3</span>
                </div>
            </a>
        </div>
        <div class="media ct-navbarCart--Item ct-u-displayTable ct-hoverImage--rectangle">
            <a href="course-single.html">
                <div class="media-left">
                    <img class="media-object" src="{!! url('assets/images/content/itemCart2.jpg') !!}" alt="Item Cart">
                </div>
                <div class="media-body">
                    <h5 class="ct-navbarCart--itemName ct-fw-400">Smart Elimu</h5>
                    <span class="ct-navbarCart--itemPrice ct-u-colorMotive">90x3</span>
                </div>
            </a>
        </div>
        <div class="media ct-navbarCart--Item ct-u-displayTable ct-hoverImage--rectangle">
            <a href="course-single.html">
                <div class="media-left">
                    <img class="media-object" src="{!! url('assets/images/content/itemCart3.jpg') !!}" alt="Item Cart">
                </div>
                <div class="media-body">
                    <h5 class="ct-navbarCart--itemName ct-fw-400">Your Product Name</h5>
                    <span class="ct-navbarCart--itemPrice ct-u-colorMotive">90x3</span>
                </div>
            </a>
        </div>
        <div class="ct-navbarCart--summary">
            <div class="pull-left">
                <a class="ct-fw-400" href=""><i class="fa fa-trash-o"></i> Clear The Cart</a>
            </div>
            <div class="pull-right">
                Total: $54.30
            </div>
            <div class="clearfix"></div>
        </div>
        <a href="" class="btn btn-primaryDark ct-fw-600 text-uppercase ct-u-marginTop30">Checkout</a>
    </div>
</div>

<div id="ct-js-wrapper" class="ct-pageWrapper">
    <div class="ct-navbarMobile">
        <a class="navbar-brand" href="{!! url('/') !!}"><img src="{!! url('assets/images/content/logo.png') !!}" alt="Website Logo"></a>

        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="ct-navbarCart--mobileIcon">
            <span class="sr-only">Toggle navigation</span>
            <span><i class="fa fa-shopping-cart"></i></span>
        </button>
    </div>
    <div class="ct-topBar text-center">
        <div class="container">
            <!-- Right Side Of Navbar -->

            <div class="ct-widget--group pull-right">


                     <span class="d-none d-xl-inline-block">
@php
    $flag = [
        'en' => 'england',
        'sw' => 'tz',
    ];
@endphp
                         <ul class="nav nav-pills">
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ url("assets/images/blank.gif") }}" class="flag flag-{{ $flag[app()->getLocale()] }}" alt="{{ __('menu.language-picker.langs.' . app()->getLocale()) }}"> {{ __('menu.language-picker.langs.' . app()->getLocale()) }}
            <i class="fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownLanguage" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
            @foreach (array_keys(
        config('locale.languages')) as $lang)
                <a class="dropdown-item" href="{{ url('lang/' . $lang) }}">
                    <img src="{{ url("assets/images/blank.gif") }}" class="flag flag-{{ $flag[$lang] }}" alt="{{ __('menu.language-picker.langs.'.$lang) }}"> {{ __('menu.language-picker.langs.'.$lang) }}
                </a>
            @endforeach
        </div>
    </li>
</ul>        </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <nav class="navbar navbar-default yamm " data-heighttopbar="60px" data-startnavbar="0">
        <div class="container">
            <div class="navbar-header">
                <a href="{!! url('/') !!}"><img src="{!! url('assets/images/content/logo.png') !!}" alt="logo"/></a>
            </div>
            <div class="ct-navbar--fluid pull-right">
                <ul class="nav navbar-nav ct-navbar--fadeInUp">
                    <li class="dropdown yamm-fw"><a href="{!! url('/') !!}">Nyumbani</a>

                    </li>
                    <li class="dropdown yamm-fw"><a href="#">Masomo</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a href="{!! route('lessons.primary') !!}">Elimu ya Msingi</a>

                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{!! route('lessons.secondary') !!}">Elimu ya Sekondari</a>
                                            {{--<a href="course-single8.html">Kidato Cha Kwanza</a>--}}

                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{!! route('lessons.extra_primary') !!}">Ziada elimu ya Msingi</a>


                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{!! route('lessons.extra_secondary') !!}">Ziada elimu ya Sekondari</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw"><a href="{!! route('news.search') !!}">Habari</a>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="{!! route('information.about_us') !!}">Wasifu Wetu</a>

                    </li>
                    <li class="dropdown"><a href="{!! route('information.contact_us') !!}">Wasiliana Nasi</a></li>

                            <!-- Authentication Links -->
                            @guest
                    <li class="dropdown yamm-fw"><a href="#">Account</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        </ul>
                    </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }}  {{ Auth::user()->last_name }}<span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <ul class="dropdown-menu">
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
                                    </div>
                                </li>
                                @endguest

                    {{--<li class="dropdown yamm-fw">--}}
                        {{--<ul class="navbar-nav ml-auto">--}}
                          {{----}}
                        {{--</ul>--}}

                    {{--</li>--}}
                </ul>

                <div class="ct-navbar-search"><i class="fa fa-times ct-navbar-search-closeIcon"></i>
                    <button class="ct-navbar-search-button" type="submit">
                        <i class="fa fa-search fa-fw"></i>
                    </button>
                    <div class="form-group">
                        <input id="search" placeholder="Search ..." required type="text" class="form-control input-lg ct-searchCourse">
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal ct-js-searchModal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h3 class="modal-title" id="myModalLabel">Search Results</h3>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

    <div class="modal ct-modal ct-js-modal-login fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h3 class="modal-title text-uppercase">Login</h3>
                </div>
                <div class="modal-body">
                    <form class="ct-u-paddingBottom100" method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group ct-u-marginBottom50">
                            <input placeholder="E-mail" type="text" required="" name="email" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Login">
                            <input placeholder="Password" type="password" required="" name="password" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Password">
                            <div class="ct-checbox--custom">
                                <input id="remember" type="checkbox" name="remember" value="remember">
                                <label for="remember">remember me</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <div class="ct-u-marginTop50">
                                <a href="#"><i class="fa fa-info-circle"></i> Forgot Password ?</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i> Register Now ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal ct-modal ct-js-modal-signup fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h3 class="modal-title text-uppercase">Jisajili</h3>
                </div>
                <div class="modal-body">
                    <form class="ct-u-paddingBottom100"  method="POST" action="{{ route('register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group ct-u-marginBottom50">
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="Name" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Name">
                                    <input placeholder="Password" type="password" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Password">
                                </div>
                                <div class="col-md-6">
                                    <input placeholder="Email" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Email">
                                    <input placeholder="Repeat Password" type="password" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Repeat">
                                </div>
                            </div>


                            <div class="ct-checbox--custom">
                                <input id="signup" type="checkbox" name="signup" value="signup">
                                <label for="signup">I agree with <a href="#" class="ct-u-textUnderline">The terms of use</a> </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg text-uppercase"><span>Sign Up</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @yield('content')


    @php

    $partners = \App\Models\Information\Partner::all();
    @endphp


    <footer>
        <div class="ct-prefooter">

            <div class="container">
                <h2 class="ct-fw-500 " align = "center">WADAU WETU</h2>
                <div class="widget widget-socialsFullWidth">
                    <div class="widget-inner">

                        <div class="container">

                            <div class="ct-slick ct-js-slick text-center ct-u-marginboth40" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="false" data-autoplaySpeed="6000" data-draggable="true" data-touchMove="false" data-arrows="false" data-XSitems="4" data-SMitems="8" data-MDitems="12" data-LGitems="12" data-items="1">



                                @foreach($partners as $partner)
                                    <div class="item ct-u-marginTop40" >
                                        <a href="#" ><img src="{!! url('img/partners/'.$partner->image.'') !!}" height = "80px" width = "80px"></a>
                                    </div>

                            @endforeach



                                <!-- <div class="item">
                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct-u-paddingBoth100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="widget">
                                    <div class="widget-inner">
                                        <a href="{!! url('/') !!}"><img class="ct-u-marginBottom30" src="{!! url('assets/images/content/logo.png') !!}" alt="logo"></a>
                                        <p class="ct-u-marginBottom40" align="justify">
                                            Smart Elimu ni jukwaa la kisasa la kujifunzia masomo kwa njia ya Picha Jongefu,
                                            Picha Mnato, Sauti na Maandishi. Jukwaa hili lililozingatia Mtaala wa elimu ya Tanzania
                                            lina mfumo uliorahisishwa zaidi ili kumfanya kila mtumiaji afurahie. Smart Elimu inaruhusu
                                            kujifunza mtandaoni na nje ya mtandao kupitia kompyuta, “tablet”, simu za mkononi na nje ya
                                            mtandao kupitia DVD / CD, na Luninga kupitia Vitunza kumbukumbu maalum.
                                            <br>
                                            <a class="ct-u-textUnderline" href="features-typography.html">Soma zaidi</a>
                                        </p></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">link Muhimu</h4>
                                <div class="widget widget-links">
                                    <div class="widget-inner">
                                        <ul class="ct-list-hyperlink list-unstyled">

                                            <li><a href="#">Miradi yetu</a></li>
                                            <li><a href="#">Wizara Ya Elimu</a></li>
                                            <li><a href="#">Necta</a></li>
                                            <li><a href="#">Nacte</a></li>
                                            <li><a href="#">Tamisemi</a></li>
                                            <li><a href="contact.html">Mawasiliano</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Kisheria</h4>
                                <div class="widget widget-links">
                                    <div class="widget-inner">
                                        <ul class="ct-list-default list-unstyled">
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
                            <div class="col-sm-6 col-md-4">
                                <h4 class="text-uppercase ct-fw-400 ct-u-marginBottom50">Mitandao ya Kijamii</h4>
                                <div class="widget widget-links">
                                    <div class="widget-inner">
                                        <ul class="ct-list list-unstyled">
                                            <li><a href="https://www.facebook.com/tydinnovation/" target = "blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                            <li><a href="https://twitter.com/" target = "blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                                            <li><a href="http://www.linkedin.com/" target = "blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                                            <li><a href="http://www.youtube.com/" target = "blank"><i class="fa fa-youtube"></i> You Tube</a></li>
                                            <li><a href="http://wa.me/255783973428" target = "blank"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-push-6">
                            <ul class="list-unstyled list-inline text-right ct-fw-300 ct-navbar--footer">
                                <li><a href="index.html">Nyumbani</a></li>
                                <li><a href="courses-listing.html">Masomo</a></li>
                                <li><a href="blog.html">Habari</a></li>
                                <li><a href="features-typography.html">Wasifu</a></li>
                                <li><a href="contact.html">mawasiliano</a></li>
                                <li><a href="gallery.html">Picha</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-md-pull-6">
                            <ul class="list-unstyled list-inline ct-copyright">
                                <li>Hatimiliki 2019</li>
                                <li><a href="http://www.tyd.or.tz/">TYD Innovation incubator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div></div>
    </footer>
</div>

<!-- JavaScripts -->
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
<script src="{!! url('assets/js/main-compiled.js') !!}"></script>


</body>
</html>