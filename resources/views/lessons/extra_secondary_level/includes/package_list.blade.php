@extends('layouts.app')

@section('content')

    <!-- Start main-content -->
    <div class="main-content bg-lighter">
        <!-- Section: inner-header -->
        {{--<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{!! url('themes/images/bg/bg3.jpg') !!}">--}}
            {{--<div class="container pt-70 pb-20">--}}
                {{--<!-- Section Content -->--}}
                {{--<div class="section-content">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<h2 class="title text-white">Course Gird</h2>--}}
                            {{--<ol class="breadcrumb text-left text-black mt-10">--}}
                                {{--<li><a href="#">Home</a></li>--}}
                                {{--<li><a href="#">Pages</a></li>--}}
                                {{--<li class="active text-gray-silver">Page Title</li>--}}
                            {{--</ol>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <!-- Section: Course gird -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 blog-pull-right">
                        <div class="row">
                            @foreach($packages as $package)
                            <div class="col-sm-6 col-md-4">
                                <div class="service-block bg-white">
                                    <div class="thumb"> <img alt="featured project" src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" class="img-fullwidth">
                                        <h4 class="text-white mt-0 mb-0"><span class="price">{!! $package->price !!}</span></h4>
                                    </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="line-bottom mb-10">{!! $package->name !!}</h4>
                                        <p>{!! strip_tags(truncateString($package->description,50)) !!}</p>
                                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{!! route('lessons.view',$package->uuid) !!}">{!! trans('label.view') !!}</a>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <nav>

                                    <ul class="pagination theme-colored xs-pull-center m-0">
                                        {{ $packages->links() }}

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="sidebar sidebar-left mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">{!! trans('label.search') !!} <span class="text-theme-color-2">{!! trans('label.course') !!}</span></h5>
                                <div class="search-form">
                                    <form action="{!! route('lessons.search') !!}" method="post">
                                        {{ csrf_field() }}

                                        <div class="input-group">
                                            <input type="text" name="keyword" placeholder="{!! trans('label.search') !!} ...." class="form-control search-input">
                                            <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">

                                <h5 class="widget-title line-bottom"> <span class="text-theme-color-2">{!! trans('label.package_category') !!}</span></h5>
                                <div class="categories">

                                    <ul class="list list-border angle-double-right">
                                        <li><a href="{!! route('lessons.primary') !!}">{!! trans('label.primary_level') !!}<span><b> ({!! $primary_level->count() !!})</b> </span></a></li>
                                        <li><a href="{!! route('lessons.secondary') !!}">{!! trans('label.secondary_level') !!}<span><b> ({!! $secondary_level->count() !!})</b> </span></a></li>
                                        <li><a href="{!! route('lessons.extra_primary') !!}">{!! trans('label.extra_primary') !!}<span><b> ({!! $extra_primary_level->count() !!})</b> </span></a></li>
                                        <li><a href="{!! route('lessons.extra_secondary') !!}">{!! trans('label.extra_secondary') !!}<span><b> ({!! $extra_secondary_level->count() !!})</b> </span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
