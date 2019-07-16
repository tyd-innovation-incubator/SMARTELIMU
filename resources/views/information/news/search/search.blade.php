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
                    <article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="ct-article">
                        <div class="ct-article-media">
                            <img itemprop="image" src="assets/images/content/blog-post1.jpg" alt="blog-post">
                        </div>
                        <div class="ct-article-title">
                            <a itemprop="url" href="blog-single.html"><h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit .</h4></a>
                        </div>
                        <ul class="list-unstyled list-inline ct-article-meta">
                            <li class="ct-article-author"><a itemprop="url" href="blog-single.html"><i class="fa fa-pencil-square-o"></i>by <span itemprop="author">Mohamed</span></a></li>
                            <li itemprop="dateCreated" class="ct-article-date"><i class="fa fa-clock-o"></i>May 23,2014</li>
                            <li class="ct-article-comments"><a itemprop="url" href="blog-single.html"><i class="fa fa-comments-o"></i><span itemprop="commentCount">29</span> Comments</a></li>
                        </ul>
                        <div itemprop="text" class="ct-article-description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum so
                                ntesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputa
                                te eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretiu
                                Integer tincidunt.
                            </p>
                        </div>
                    </article>
                    <article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" class="ct-article">
                        <div class="ct-article-media">
                            <div class="ct-slick ct-js-slick ct-slick-defaultNavigation" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="true" data-autoplaySpeed="6000" data-draggable="true" data-touchMove="false" data-arrows="true" data-items="1">
                                <div class="item">
                                    <img itemprop="image" src="assets/images/content/blog-post2.jpg" alt="blog post">
                                </div>
                                <div class="item">
                                    <img itemprop="image" src="assets/images/content/blog-post3.jpg" alt="blog post">
                                </div>
                                <div class="item">
                                    <img itemprop="image" src="assets/images/content/blog-post1.jpg" alt="blog post">
                                </div>
                            </div>
                        </div>
                        <div class="ct-article-title">
                            <a itemprop="url" href="blog-single.html"><h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit .</h4></a>
                        </div>
                        <ul class="list-unstyled list-inline ct-article-meta">
                            <li class="ct-article-author"><a itemprop="url" href="blog-single.html"><i class="fa fa-pencil-square-o"></i>by <span itemprop="author">Mohamed</span></a></li>
                            <li itemprop="dateCreated" class="ct-article-date"><i class="fa fa-clock-o"></i>May 23,2014</li>
                            <li class="ct-article-comments"><a itemprop="url" href="blog-single.html"><i class="fa fa-comments-o"></i><span itemprop="commentCount">29</span> Comments</a></li>
                        </ul>
                        <div itemprop="text" class="ct-article-description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum so
                                ntesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputa
                                te eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretiu
                                Integer tincidunt.
                            </p>
                        </div>
                    </article>

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
                                        <h4 class="text-uppercase ct-u-textNormal ct-fw-900">Makundi ya habari</h4>
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
                                            <li>
                                                <div class="widget-latest-posts-left">
                                                    <a href="blog-single.html">
                                                        <img src="assets/images/content/popular-post1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="widget-latest-posts-content">
                                                    <a href="blog-single.html">
                                                        <h5 class="ct-fw-900">But I must explain.</h5>
                                                    </a>
                                                    <p class="ct-fw-400 ct-u-marginBottom10">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        dolor. Aenean massa .
                                                    </p>
                                                    <span class="ct-fw-300">Jul 29 2013</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-latest-posts-left">
                                                    <a href="blog-single.html">
                                                        <img src="assets/images/content/popular-post2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="widget-latest-posts-content">
                                                    <a href="blog-single.html">
                                                        <h5 class="ct-fw-900">Lorem ipsum dolor sit amet .</h5>
                                                    </a>
                                                    <p class="ct-fw-400 ct-u-marginBottom10">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        dolor. Aenean massa .
                                                    </p>
                                                    <span class="ct-fw-300">Jul 29 2013</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-latest-posts-left">
                                                    <a href="blog-single.html">
                                                        <img src="assets/images/content/popular-post3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="widget-latest-posts-content">
                                                    <a href="blog-single.html">
                                                        <h5 class="ct-fw-900">Donec quam felis, ultricies .</h5>
                                                    </a>
                                                    <p class="ct-fw-400 ct-u-marginBottom10">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        dolor. Aenean massa .
                                                    </p>
                                                    <span class="ct-fw-300">Jul 29 2013</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-latest-posts-left">
                                                    <a href="blog-single.html">
                                                        <img src="assets/images/content/popular-post4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="widget-latest-posts-content">
                                                    <a href="blog-single.html">
                                                        <h5 class="ct-fw-900">These sweet mornings.</h5>
                                                    </a>
                                                    <p class="ct-fw-400 ct-u-marginBottom10">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        dolor. Aenean massa .
                                                    </p>
                                                    <span class="ct-fw-300">Jul 29 2013</span>
                                                </div>
                                            </li>
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
