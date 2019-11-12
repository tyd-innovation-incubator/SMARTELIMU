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

        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-posts">
                            <div class="col-md-12">
                                <div class="row list-dashed">
                                    @foreach($all_news as $news)

                                        <article class="post clearfix mb-30 pb-30">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="{!! url('http://admin.smartelimu.ac.tz/img/news/'.$news->image.'') !!}" alt="" class="img-responsive img-fullwidth">
                                                </div>
                                            </div>
                                            <div class="entry-content border-1px p-20 pr-10">
                                                <div class="entry-meta media mt-0 no-bg no-border">
                                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                        <ul>
                                                            <li class="font-16 text-white font-weight-600">{!! $news->created_at->format('d') !!}</li>
                                                            <li class="font-12 text-white text-uppercase">{!! $news->created_at->format('M') !!}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="media-body pl-15">
                                                        <div class="event-content pull-left flip">
                                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{!! route('news.show',$news->slug) !!}">{!! $news->title !!}</a></h4>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-10">{!! truncateString($news->content) !!}</p>
                                                <a href="{!! route('news.show',$news->slug) !!}" class="btn-read-more">{!! trans('label.read_more') !!}</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <nav>
                                    <ul class="pagination theme-colored">
                                        <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">...</a></li>
                                        <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Search box</h5>
                                <div class="search-form">
                                    <form action="{!! route('news.search') !!}" method="post">
                                        {{ csrf_field() }}

                                        <div class="input-group">
                                            <input type="text" name="keyword" placeholder="{!! trans('label.search') !!}....." class="form-control search-input">
                                            <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">{!! trans('label.news_categories') !!}</h5>
                                <div class="categories">
                                    <ul class="list list-border angle-double-right">
                                        <li><a href="#">Ubunifu<span>(0)</span></a></li>
                                        <li><a href="#">Tehama<span>(0)</span></a></li>
                                        <li><a href="#">Ugunduzi<span>(0)</span></a></li>
                                        <li><a href="#">Maonyesho<span>(0)</span></a></li>
                                        <li><a href="#">Michezo<span>(0)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Latest News</h5>
                                <div class="latest-posts">
                                    @foreach($all_news as $news)
                                        <article class="post media-post clearfix pb-0 mb-10">
                                            <a class="post-thumb" href="#"><img src="{!! url('http://admin.smartelimu.ac.tz/img/news/'.$news->image.'') !!}" alt=""></a>
                                            <div class="post-right">
                                                <h5 class="post-title mt-0"><a href="#">{!! $news->title !!}</a></h5>
                                                <p>{!! truncateString($news->content,50) !!}</p>
                                            </div>
                                        </article>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>





@endsection
