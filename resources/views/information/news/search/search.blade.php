@extends('layouts.main', ['title' => 'Habari', 'header' =>'Habari'])

@push('after-styles')

<style>
    #image_box
    {

        max-width:200px; /* or whatever width you want. */

    }
</style>
@endpush

@section('content')

    <div class="ct-site--map ct-u-backgroundGradient">
        <div class="container">
            <div class="ct-u-displayTableVertical text-capitalize">
                <div class="ct-u-displayTableCell">
                <span class="ct-u-textBig">
                    Habari na Matukio
                </span>
                </div>
                <div class="ct-u-displayTableCell pull-right">
                <span class="ct-u-textNormal ct-u-textItalic">
                    <a href="index.html">Nyumbani</a> / <a href="blog.html">Habari</a>
                </span>
                </div>
            </div>
        </div>
    </div>
    <section class="ct-u-paddingTop10 ct-blog" itemscope itemtype="http://schema.org/Blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    @foreach($all_news as $news)
                    <article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="ct-article">
                        <div class="ct-article-media">
                            <div class="ct-slick ct-js-slick ct-slick-defaultNavigation" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="true" data-autoplaySpeed="6000" data-draggable="true" data-touchMove="false" data-arrows="true" data-items="1">
                                <div class="item">
                                    <img itemprop="image" src="{!! url('img/news/'.$news->image.'') !!}" alt="blog post" height="300">
                                </div>

                            </div>
                        </div>
                        <div class="ct-article-title">
                            <a itemprop="url" href="blog-single.html"><h4>{!! $news->title !!}</h4></a>
                        </div>
                        <ul class="list-unstyled list-inline ct-article-meta">
                            <li class="ct-article-author"><a itemprop="url" href="blog-single.html"><i class="fa fa-pencil-square-o"></i>by <span itemprop="author">Mohamed</span></a></li>
                            <li itemprop="dateCreated" class="ct-article-date"><i class="fa fa-clock-o"></i>{!! short_date_format($news->created_at )!!}</li>
                            <li class="ct-article-comments"><a itemprop="url" href="blog-single.html"><i class="fa fa-comments-o"></i> {!! $news->category !!}</a></li>
                        </ul>
                        <div itemprop="text" class="ct-article-description">
                            <p>
                              {!! $news->content !!}
                            </p>
                        </div>
                    </article>

                        @endforeach

                </div>
                <div class="col-md-4">
                    <div class="ct-sidebar">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <section class="widget ct-search-widget ct-u-marginBottom100">
                                    <div class="widget-inner">
                                        <h4 class="text-uppercase ct-u-textNormal ct-fw-900">Search</h4>
                                        <div class="ct-divider ct-u-marginBoth30"></div>

                                        <div class="form-group">
                                            <input id="search2" placeholder="Start searching ..." required type="text" name="field[]" class="form-control input-lg">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <section class="widget ct-widget-categories ct-u-marginBottom100">
                                    <div class="widget-inner">
                                        <h4 class="text-uppercase ct-u-textNormal ct-fw-900">@lang('label.news_categories')</h4>
                                        <div class="ct-divider--dark ct-u-marginTop30 ct-u-marginBottom20"></div>
                                        <ul class="list-unstyled ct-fw-400">
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Ubunifu 60</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Tehama 80</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Picha mnato (25)</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Ugunduzi (37)</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Maonesho (37)</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Michezo (82)</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <section class="widget ct-widget-latestPosts ct-u-marginBottom100">
                                    <div class="widget-inner">
                                        <h4 class="text-uppercase ct-u-textNormal ct-fw-900">Habari Mpya</h4>
                                        <div class="ct-divider--dark ct-u-marginBoth30"></div>
                                        <ul class="list-unstyled">
                                            @foreach($latest_news as $latest)
                                            <li>
                                                <div class="widget-latest-posts-left">
                                                    <a href="blog-single.html">
                                                        <img src="{!! url('img/news/'.$latest->image.'') !!}" alt="">
                                                    </a>
                                                </div>
                                                <div class="widget-latest-posts-content">
                                                    <a href="blog-single.html">
                                                        <h5 class="ct-fw-900">{!! $latest->title !!}</h5>
                                                    </a>
                                                    <p class="ct-fw-400 ct-u-marginBottom10">
                                                     {!! truncateString($latest->content,80)!!}
                                                    </p>
                                                    <span class="ct-fw-300">{!! short_date_format($latest->created_at) !!}</span>
                                                </div>
                                            </li>
                                       @endforeach

                                        </ul>
                                    </div>
                                </section>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
