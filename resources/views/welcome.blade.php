@extends('layouts.app')

@section('content')

    {{--Header--}}
    <section id="home" class="divider">
        <div class="fullwidth-carousel" data-nav="true">
                        @foreach($homeslides as $homeslide)

            <div class="item bg-img-cover" data-bg-img="{!! url('http://admin.smartelimu.ac.tz/img/homeslides/'.$homeslide->image.'') !!}" style="height: 60%">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container pt-150 pb-150">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <div class="inline-block mt-40 pb-60 pl-60 pr-60 pt-40" data-bg-color="rgba(255,255,255, 0.8)">
                                        <h1 class="text-uppercase text-theme-colored font-raleway font-weight-800 mb-0 mt-0 font-48" >We Are <span class="text-theme-color-2">SMART ELIMU</span></h1>
                                        <p class="font-16 text-black font-raleway letter-spacing-1 mb-20">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.</p>
                                        <a class="btn btn-colored btn-theme-colored" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            @endforeach
        </div>
    </section>
{{--    <header>--}}
{{--        <div class="ct-slick ct-js-slick ct-slick-defaultNavigation" data-height="500" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="true" data-autoplaySpeed="6000" data-draggable="false" data-touchMove="false" data-arrows="true" data-items="1">--}}
{{--            @foreach($homeslides as $homeslide)--}}
{{--                <div class="item" data-bg="{!! url('http://admin.smartelimu.ac.tz/img/homeslides/'.$homeslide->image.'') !!}">--}}
{{--                    <div class="ct-slick-inner">--}}
{{--                        <div class="ct-slick-content">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-5 ">--}}
{{--                                        <h3 class="text-capitalize ct-fw-900 ct-u-marginBottom40 animated" data-fx="bounceInDown" data-time="200">{!! $homeslide->title !!}</h3>--}}
{{--                                        <p class="ct-u-marginBottom40 ct-fw-600 animated" data-fx="bounceInLeft" data-time="400">{!! $homeslide->content !!} </p>--}}
{{--                                        <a class="text-uppercase btn btn-primary btn-lg animated" data-fx="bounceInUp" data-time="200" href="#packages">{!! trans('label.view_course') !!}</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </header>--}}


    <!-- Section:about-->
    <section>
        <div class="container pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="meet-doctors">
                            <h2 class="text-uppercase mt-0 line-height-1"><span class="text-theme-colored">MAADILI YETU YA MSINGI</span></h2>
                            <h6 class="text-uppercase letter-space-5 line-bottom title font-playfair text-uppercase"></h6>
                            <p>Jukwaa hili lililozingatia Mtaala wa elimu ya Tanzania lina mfumo uliorahisishwa zaidi ili kumfanya kila mtumiaji afurahie.
                                Smart Elimu inaruhusu kujifunza mtandaoni na nje ya mtandao kupitia kompyuta</p>
                        </div>
                        <div class="row mb-sm-30">
                            <div class="col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-20">
                                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                        <i class="pe-7s-scissors text-white"></i>
                                    </a>
                                    <div class="ml-70 ml-sm-0">
                                        <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">UGUNDUZI</h5>
                                        <p class="text-gray">Silaha yetu kuu ni ugunduzi ili kutoa yaliyo bora kwenye elimu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-20">
                                    <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                        <i class="pe-7s-pen text-white"></i>
                                    </a>
                                    <div class="ml-70 ml-sm-0">
                                        <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">UWAJIBIKAJI</h5>
                                        <p class="text-gray">Sisi pamoja na Wadau wetu tunawajibika kwenye majukumu yetu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-20">
                                    <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                        <i class="pe-7s-tools text-white"></i>
                                    </a>
                                    <div class="ml-70 ml-sm-0">
                                        <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">USHIRIKISHAJI</h5>
                                        <p class="text-gray">Fumbuzi zetu za kielimu ni shirikishi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-20">
                                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                                        <i class="pe-7s-vector text-white"></i>
                                    </a>
                                    <div class="ml-70 ml-sm-0">
                                        <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">UADILIFU</h5>
                                        <p class="text-gray">Tunawajali wateja wetu kwa kuwapa Fumbuzi za kuaminika.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-30 mt-0 bg-theme-colored">
                            <h3 class="title-pattern mt-0"><span class="text-white"> <span class="text-theme-color-2">{!! trans('label.register_here') !!}</span></span></h3>
                            <!-- Appilication Form Start-->
                            <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post"  action="{{ route('auth.register_from_welcome') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="{!! trans('label.first_name') !!}" type="text" id="reservation_name" name="first_name" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="{!! trans('label.email') !!}" type="text" id="reservation_email" name="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="{!! trans('label.phone') !!}" type="text" id="reservation_phone" name="phone" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">

                                            <input placeholder="{!! trans('label.password') !!}" type="password" id="reservation_phone" name="password" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="{!! trans('label.password_confirmation') !!}" type="password" id="reservation_phone" name="password_confirmation" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="">--}}
                                            <button type="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block">{!! trans('label.register_now') !!}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Application Form End-->

                            <!-- Application Form Validation Start-->
{{--                            <script type="text/javascript">--}}
{{--                                $("#reservation_form").validate({--}}
{{--                                    submitHandler: function(form) {--}}
{{--                                        var form_btn = $(form).find('button[type="submit"]');--}}
{{--                                        var form_result_div = '#form-result';--}}
{{--                                        $(form_result_div).remove();--}}
{{--                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');--}}
{{--                                        var form_btn_old_msg = form_btn.html();--}}
{{--                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));--}}
{{--                                        $(form).ajaxSubmit({--}}
{{--                                            dataType:  'json',--}}
{{--                                            success: function(data) {--}}
{{--                                                if( data.status == 'true' ) {--}}
{{--                                                    $(form).find('.form-control').val('');--}}
{{--                                                }--}}
{{--                                                form_btn.prop('disabled', false).html(form_btn_old_msg);--}}
{{--                                                $(form_result_div).html(data.message).fadeIn('slow');--}}
{{--                                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);--}}
{{--                                            }--}}
{{--                                        });--}}
{{--                                    }--}}
{{--                                });--}}
{{--                            </script>--}}
                            <!-- Application Form Validation Start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{--subjects / courses--}}
    <section class="bg-lighter">
        <div class="container pb-60">
            <div class="section-title mb-10">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1"><span class="text-theme-color-2 font-weight-400">{!! trans('label.extra_courses') !!}</span></h2>
                        <h4 class="pb-20">{!! trans('label.extra_course_description') !!}</h4>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col" data-dots="true">
                            @foreach($packages as $package)
                                <div class="item">
                                    <div class="service-block mb-md-30 bg-white">
                                        <div class="thumb"> <img alt="featured project" src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" class="img-responsive img-fullwidth">
                                            <h4 class="text-white mt-0 mb-0"><span class="price">{!! $package->price !!}TSH</span></h4>
                                        </div>
                                        <div class="content text-left flip p-25 pt-0">
                                            <h4 class="line-bottom mb-10">{!! $package->name !!}</h4>
                                            <p>{!! truncateString($package->description,30) !!}</p>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{!! route('lessons.view',$package->uuid) !!}">{!! trans('label.view') !!}</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="5248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase mb-0">{!! trans('label.candidates') !!}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase mb-0">{!! trans('label.parents') !!}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-users mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase mb-0">{!! trans('label.teachers') !!}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                    <div class="funfact text-center">
                        <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase mb-0">{!! trans('label.partners') !!}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--testimonial--}}

{{--    <div class=" text-center ct-u-marginBottom60">--}}
{{--        <h3 class="ct-fw-600 text-uppercase">USHUHUDA</h3>--}}
{{--    </div>--}}
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="images/bg/bg2.jpg">
        <div class="container pt-60 pb-60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="line-bottom-center text-gray-lightgray text-center mt-0 mb-30">{!! trans('label.testimonial') !!}</h2>
                    <div class="owl-carousel-1col" data-dots="true">
                        @foreach($testimonies as $testimony)
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                                        <img  class="img-circle" alt="" src="{!! url('http://admin.smartelimu.ac.tz/img/testimonials/'.$testimony->image.'') !!}">
                                    </div>
                                    <div class="ml-100 ">
                                        <h4 class="text-white mt-0">{!! ($testimony->message) !!}</h4>
                                        <p class="author mt-20">- <span class="text-theme-color-2">{!! $testimony->name !!},</span> <small><em class="text-gray-lightgray">{!! $testimony->occupation !!}</em></small></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
