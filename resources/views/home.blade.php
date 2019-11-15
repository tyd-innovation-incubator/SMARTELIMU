@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <!-- Section: COURSES -->
        <section class="bg-lighter">
            <div class="container pb-60">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1"> <span class="text-theme-color-2 font-weight-400">{!! trans('label.course') !!}</span></h2>
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


    @php
        $partners = \App\Models\Information\Partner::all();
        $about = \App\Models\Information\About::get()->first();
    @endphp
    <!-- Divider: Clients -->
        <section class="clients">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
                            @foreach($partners as $partner)
                                <div class="item"> <a href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/partners/'.$partner->image.'') !!}" alt=""></a> </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
