@extends('layouts.app', ['title' => 'Habari', 'header' =>'Habari'])

@push('after-styles')

<style>
    #image_box
    {

        max-width:200px; /* or whatever width you want. */

    }
</style>
@endpush

@section('content')

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        {{--<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">--}}
            {{--<div class="container pt-70 pb-20">--}}
                {{--<!-- Section Content -->--}}
                {{--<div class="section-content">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<h2 class="title text-white">Blog</h2>--}}
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

        <!-- Section: News & Blog -->
        <section id="news">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        @foreach($all_news as $news)
                        <div class="col-sm-6 col-md-4">
                            <article class="post clearfix mb-30 mb-sm-30">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{!! url('http://admin.smartelimu.ac.tz/img/news/'.$news->image.'') !!}" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content p-20 pr-10 bg-lighter">
                                    <div class="entry-meta media mt-0 no-bg no-border">
                                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600 border-bottom">{!! $news->created_at->format('d') !!}</li>
                                                <li class="font-12 text-white text-uppercase">{!! $news->created_at->format('M') !!}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">{!! $news->title !!}</a></h4>
                                                <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                                                <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-10">{!! $news->content !!}</p>
                                    <a href="{!! route('news.show',$news->slug) !!}" class="btn-read-more">{!! trans('label.read_more') !!}</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </section>
    </div>






@endsection
