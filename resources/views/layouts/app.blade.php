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
    <link href="themes/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="themes/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="themes/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="themes/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="themes/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="themes/css/animate.css" rel="stylesheet" type="text/css">
    <link href="themes/css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="themes/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="themes/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="themes/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="themes/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="themes/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="themes/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="themes/js/jquery-2.2.4.min.js"></script>
    <script src="themes/js/jquery-ui.min.js"></script>
    <script src="themes/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="themes/js/jquery-plugin-collection.js"></script>

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
                            <li><a href="javascript:void(0)">{!! trans('label.course') !!}</a>
                                <div class="megamenu">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> {!! trans('label.primary_level') !!}</a></li>
                                                @foreach(code_value()->getPrimaryLevelPackages() as $package)
                                                    <li><a href="{!! route('lessons.view',$package->uuid) !!}">{!! $package->name !!}</a></li>

                                                    {{--<a href="{!! route('lessons.view',$package->uuid) !!}">{!! $package->name !!}</a>--}}

                                                @endforeach

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> {!! trans('label.secondary_level') !!}</a></li>

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> {!! trans('label.extra_primary') !!}</a></li>

                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled list-dashed">
                                                <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> {!! trans('label.extra_secondary') !!}</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{!! url('/home') !!}">{!! trans('label.news') !!}</a></li>


                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">About</a>
                                        <ul class="dropdown">
                                            <li><a href="page-about-style1.html">About Style 1</a></li>
                                            <li><a href="page-about-style2.html">About Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Profile</a>
                                        <ul class="dropdown">
                                            <li><a href="page-account.html">Account</a></li>
                                            <li><a href="page-account-edit.html">Edit Account</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul class="dropdown">
                                            <li><a href="page-gallery-3col.html">3 Columns</a></li>
                                            <li><a href="page-gallery-4col.html">4 Columns</a></li>
                                            <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                                            <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                                            <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                                            <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                                            <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                                            <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                                            <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pricing</a>
                                        <ul class="dropdown">
                                            <li><a href="page-pricing-style1.html">Pricing style1</a></li>
                                            <li><a href="page-pricing-style2.html">Pricing style2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Calender</a>
                                        <ul class="dropdown">
                                            <li><a href="page-calendar1.html">Calendar Style1</a></li>
                                            <li><a href="page-calendar2.html">Calendar Style2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Events</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Events Grid</a>
                                                <ul class="dropdown">
                                                    <li><a href="events-grid-2column.html">Grid 2column</a></li>
                                                    <li><a href="events-grid-3column.html">Grid 3column</a></li>
                                                    <li><a href="events-grid-4column.html">Grid 4column</a></li>
                                                    <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                                    <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Events List</a>
                                                <ul class="dropdown">
                                                    <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                                                    <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                                                    <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Events Details</a>
                                                <ul class="dropdown">
                                                    <li><a href="events-details-style1.html">Details Style1</a></li>
                                                    <li><a href="events-details-style2.html">Details Style2</a></li>
                                                    <li><a href="events-details-style3.html">Details Style3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="events-table.html">Events Table</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Job <span class="label label-success">New</span></a>
                                        <ul class="dropdown">
                                            <li><a href="job-list.html">Job List</a></li>
                                            <li><a href="job-details-style1.html">Job Details Style1</a></li>
                                            <li><a href="job-details-style2.html">Job Details Style2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-category.html">Category</a></li>
                                            <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                                            <li><a href="shop-product-details.html">Product Details</a></li>
                                            <li><a href="shop-cart.html">Cart</a></li>
                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a>
                                        <ul class="dropdown">
                                            <li><a href="page-contact-style1.html">Contact style 1</a></li>
                                            <li><a href="page-contact-style2.html">Contact style 2</a></li>
                                            <li><a href="page-contact-style3.html">Contact style 3</a></li>
                                            <li><a href="page-contact4-with-multiple-marker.html">Contact 4 - Multiple Marker</a></li>
                                            <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">FAQ</a>
                                        <ul class="dropdown">
                                            <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                                            <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                                            <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                                            <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Page 404</a>
                                        <ul class="dropdown">
                                            <li><a href="page-404-style1.html">Style1</a></li>
                                            <li><a href="page-404-style2.html">Style2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Coming Soon</a>
                                        <ul class="dropdown">
                                            <li><a href="page-coming-soon-style1.html">style 1</a></li>
                                            <li><a href="page-coming-soon-style2.html">style 2</a></li>
                                            <li><a href="page-coming-soon-style3.html">style 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Under Construction</a>
                                        <ul class="dropdown">
                                            <li><a href="page-under-construction-style1.html">Style1</a></li>
                                            <li><a href="page-under-construction-style2.html">Style2</a></li>
                                            <li><a href="page-under-construction-style3.html">Style3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Portfolio <span class="label label-info"></span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Boxed</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-boxed-gutter-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-boxed-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-boxed-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-boxed-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-boxed-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-boxed-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-boxed-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-boxed-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-boxed-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-boxed-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-boxed-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-boxed-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-boxed-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-boxed-title-gutter-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-boxed-title-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-boxed-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-boxed-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Wide</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-wide-gutter-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-wide-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-wide-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-wide-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-wide-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-wide-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-wide-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-wide-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-wide-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-wide-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-wide-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-wide-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-wide-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-wide-title-gutter-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-wide-title-1-col.html">1 Column</a></li>
                                                    <li><a href="portfolio-wide-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-wide-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry Boxed</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-boxed-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-boxed-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-gutter-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-boxed-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-boxed-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry Wide</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-wide-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-wide-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-wide-gutter-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-gutter-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-masonry-wide-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-masonry-wide-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tiles Boxed</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-boxed-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-boxed-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-boxed-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-boxed-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tiles Wide</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-wide-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-wide-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-wide-title-gutter-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-gutter-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Title - Gutter Less</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio-tiles-wide-title-2-col.html">2 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-3-col.html">3 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-4-col.html">4 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-5-col.html">5 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-6-col.html">6 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-7-col.html">7 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-8-col.html">8 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-9-col.html">9 Columns</a></li>
                                                    <li><a href="portfolio-tiles-wide-title-10-col.html">10 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Loading Styles</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-extra-infinity-scroll.html">Infinity Scroll</a></li>
                                            <li><a href="portfolio-extra-infinity-scroll-lazyload.html">Infinity Scroll Lazyload</a></li>
                                            <li><a href="portfolio-extra-pagination.html">Pagination</a></li>
                                            <li><a href="portfolio-extra-jquery-pagination.html">Pagination Jquery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Single</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-details-image.html">With - Image</a></li>
                                            <li><a href="portfolio-details-image-gallery.html">With - Image Gallery</a></li>
                                            <li><a href="portfolio-details-video-gallery.html">With - Video Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#home">Courses</a>
                                <ul class="dropdown">
                                    <li><a href="page-course-gird.html">Course Gird</a></li>
                                    <li><a href="page-course-list.html">Course List</a></li>
                                    <li><a href="page-courses-accounting-technologies.html">Course Details</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">Blog Classic</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                                            <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                                            <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                                            <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                                            <li><a href="blog-classic-left-thumbs.html">Blog Classic Left Thumbs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Grid</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                                            <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                            <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Masonry</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-masonry-2-column.html">Blog Masonry 2 Column</a></li>
                                            <li><a href="blog-masonry-3-column.html">Blog Masonry 3 Column</a></li>
                                            <li><a href="blog-masonry-4-column.html">Blog Masonry 4 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Single</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                            <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                            <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                                            <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                                            <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Infinity Scroll</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-extra-infinity-scroll.html">Blog Infinity Scroll Default</a></li>
                                            <li><a href="blog-extra-infinity-scroll-lazyload.html">Blog Infinity Scroll Lazyload</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Timeline</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-timeline.html">Blog Timeline Default</a></li>
                                            <li><a href="blog-timeline-masonry.html">Blog Timeline Masonry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            @guest
                            <li><a href="#">Account</a>
                                <ul class="dropdown">
                                    <li>
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            <div class="item"> <a href="#"><img src="{!! url('img/partners/'.$partner->image.'') !!}" alt=""></a> </div>

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
<script src="themes/js/custom.js"></script>

</body>

<!-- Mirrored from html.kodesolution.live/s/studypress/v6.0/demo/features-header-style3.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 21 Oct 2019 07:32:39 GMT -->
</html>
