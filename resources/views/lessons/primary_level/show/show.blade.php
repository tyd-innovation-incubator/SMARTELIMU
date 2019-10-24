@extends('layouts.app')

@section('content')

    {{--<div class="ct-site--map ct-u-backgroundGradient">--}}
        {{--<div class="container">--}}
            {{--<div class="ct-u-displayTableVertical text-capitalize">--}}
                {{--<div class="ct-u-displayTableCell">--}}
                {{--<span class="ct-u-textBig">--}}
                    {{--{!! $package->name !!}--}}
                {{--</span>--}}
                {{--</div>--}}
                {{--<div class="ct-u-displayTableCell text-right">--}}
                {{--<span class="ct-u-textNormal ct-u-textItalic">--}}
                    {{--<a href="course-single.html">Nyumbani</a> / <a href="course-single2.html">Darasa linalofata</a>--}}
                {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<section class="ct-u-paddingBoth100 ct-u-doubleBorder ct-u-backgroundLightGreen">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="ct-sidebarProducts">--}}
                        {{--<div class="ct-productBox">--}}
                            {{--<a href="{!! route('lessons.view',$package->uuid) !!}">--}}
                                {{--<div class="ct-productImage">--}}
                                    {{--<img src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" alt="Product">--}}
                                {{--</div>--}}
                                {{--<div class="ct-productDescription">--}}
                                    {{--<h4 class="ct-fw-600">{!! $package->category !!}</h4>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<div class="ct-productMeta">--}}
                                {{--<div class="ct-u-displayTableVertical">--}}
                                    {{--<div class="ct-u-displayTableCell">--}}
                                        {{--<div class="starrr" data-rating='4'></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-u-displayTableCell">--}}
                                        {{--<span class="ct-u-colorMotive">{!! number_1_format($package->price) !!}Tsh</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-u-displayTableCell">--}}
                                        {{--<a href="#">83 Student <i class="fa fa-user"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="ct-sidebarNavigation">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li class="ct-fw-700"><a href="#"><i class="fa fa-paper-plane-o"></i>Nyumbani</a></li>--}}
                                {{--<li class="ct-fw-700"><a href="#"><i class="fa fa-laptop"></i>Silabasi</a></li>--}}
                                {{--<li class="ct-fw-700"><a href="#"><i class="fa fa-user"></i>Wadau</a></li>--}}
                                {{--<li class="ct-fw-700"><a href="#"><i class="fa fa-comments-o"></i>Picha Mjomgeo</a></li>--}}
                                {{--<li class="ct-fw-700"><a href="#"><i class="fa fa-stack-overflow"></i>Katuni mjongeo</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="hidden-lg hidden-md ct-u-marginBottom30"></div>--}}
                {{--<div class="col-md-8">--}}
                    {{--<div class="ct-textBox ct-textBox--price ct-u-displayTableVertical ct-u-marginBottom30">--}}
                        {{--<div class="ct-u-displayTableCell text-left">--}}
                            {{--<span class="ct-fw-600">{!! trans('label.price') !!} :</span> <span class="ct-u-colorMotive">{!! number_1_format($package->price) !!} Tsh</span>--}}
                        {{--</div>--}}
                        {{--<div class="ct-u-displayTableCell text-right">--}}
                            {{--<form action="{!! route('package.create_invoice',$package->uuid) !!}" method="get">--}}

                                {{--{!! dd(access()->user()->packages) !!}--}}
                                {{--@foreach(access()->user()->packages as $package)--}}
                              {{--@if(isset($package->invoice) ? $package->invoice->ispaid :'')--}}

                                    {{--<button type="submit" class="btn btn-primary text-capitalize">--}}
                                        {{--view--}}
                                    {{--</button>--}}
                                  {{--@else--}}
                                    {{--<button type="submit" class="btn btn-primary text-capitalize">--}}
                                        {{--{!! trans('label.take_course') !!}--}}

                                    {{--</button>--}}
                                  {{--@endif--}}
                                    {{--@endforeach--}}



                            {{--</form>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="ct-textBox">--}}
                        {{--<h4 class="ct-fw-600 ct-u-marginBottom40" style="color: #0b0b0b">--}}
                            {{--{!! $package->description !!}--}}
                        {{--</h4>--}}
                        {{--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
                            {{--@foreach($package->subjects as $subject)--}}
                            {{--<div class="panel panel-default">--}}
                                {{--<div class="panel-heading" role="tab" id="headingOne">--}}
                                    {{--<h4 class="panel-title">--}}
                                        {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
                                            {{--<i class="fa fa-list-alt"></i> {!! $subject->name !!}--}}
                                        {{--</a>--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                                {{--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                                    {{--<div class="panel-body">--}}
                                      {{--{!! truncateString($subject->description,150) !!}--}}
                                        {{--@if(isset($package->invoice) ? $package->invoice->ispaid :'')--}}
                                        {{--@foreach($subject->chapters as $chapter)--}}
                                        {{--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                                            {{--<div class="panel-body">--}}
                                                {{--<strong>{!! $chapter->name !!}</strong>--}}

                                                {{--@foreach($chapter->sections as $section)--}}
                                                    {{--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                                                        {{--<div class="panel-body">--}}
                                                            {{--{!! $section->section_name !!} <br>--}}
                                                            {{--<a href="{!! $section->video_file !!}">Video link</a> <br>--}}
                                                            {{--<a href="{!! $section->audio_file !!}">Audio link</a> <br>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                            {{--@endforeach--}}
                                            {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                                {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



    <div class="main-content">

        <!-- Section: inner-header -->
        {{--<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="themes/images/bg/bg3.jpg">--}}
            {{--<div class="container pt-70 pb-20">--}}
                {{--<!-- Section Content -->--}}
                {{--<div class="section-content">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<h2 class="title text-white">Product Details</h2>--}}
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

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="product">
                            <div class="col-md-5">
                                <div class="product-image">
                                    <div class="zoom-gallery">
                                        <a href="images/products/lg1.jpg" title="Title Here 1"><img src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-summary">
                                    <h2 class="product-title">  {!! $package->name !!}
                                    </h2>
                                    <div class="product_review">
                                        <ul class="review_text list-inline">
                                            <li>
                                                <div title="Rated 4.50 out of 5" class="star-rating"><span style="width: 90%;">4.50</span></div>
                                            </li>
                                            <li><a href="#"><span>2</span>Reviews</a></li>
                                            <li><a href="#">Add reviews</a></li>
                                        </ul>
                                    </div>
                                    <div class="price"> <ins><span class="amount"> {!! $package->price !!}
TSH</span></ins> </div>
                                    <div class="short-description">
                                        <p>  {!! $package->description !!}
                                        </p>
                                    </div>
                                    {{--<div class="tags"><strong>SKU:</strong> EA34</div>--}}
                                    <div class="category"><strong>Category:</strong>  {!! $package->category !!}
                                    </div>
                                    {{--<div class="tags"><strong>Tags:</strong> <a href="#">Bag</a>, <a href="#">Ladies Bag</a></div>--}}
                                    <div class="cart-form-wrapper mt-30">
                                        <form enctype="multipart/form-data" method="get" class="cart" action="{!! route('package.create_invoice',$package->uuid) !!}">
                                            <input type="hidden" value=" {!! $package->uuid !!}
                                                    " name="package">
                                            {{--<table class="table variations no-border">--}}
                                                {{--<tbody>--}}
                                                {{--<tr>--}}
                                                    {{--<td class="name">Amount</td>--}}
                                                    {{--<td class="value">--}}
                                                        {{--<div class="quantity buttons_added">--}}
                                                            {{--<input type="button" class="minus" value="-">--}}
                                                            {{--<input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">--}}
                                                            {{--<input type="button" class="plus" value="+">--}}
                                                        {{--</div>--}}
                                                    {{--</td>--}}
                                                {{--</tr>--}}
                                                {{--</tbody>--}}
                                            {{--</table>--}}
                                            <button class="btn btn-success" href="{!! route('lessons.view',$package->uuid) !!}" type="submit">Add to cart</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="horizontal-tab product-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h3>Product Description</h3>
                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td><p>Envato</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td><p>Black</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td><p>Large, Medium</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>27 kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions</th>
                                                    <td>16 x 22 x 123 cm</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="reviews">
                                                <ol class="commentlist">
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline">
                                                                    <li>
                                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span style="width: 100%;">5.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline">
                                                                    <li>
                                                                        <div title="Rated 4.00 out of 5" class="star-rating"><span style="width: 80%;">4.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="line-bottom">Related Products</h3>
                            <div class="row multi-row-clearfix">
                                <div class="products related">
                                    <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                                        <div class="product">
                                            <span class="tag-sale">Sale!</span>
                                            <div class="product-thumb">
                                                <img alt="" src="images/products/6.jpg" class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Watch</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 80%;">3.50</span></div>
                                                <div class="price"><del><span class="amount">$165.00</span></del><ins><span class="amount">$160.00</span></ins></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                                        <div class="product">
                                            <span class="tag-sale">Sale!</span>
                                            <div class="product-thumb">
                                                <img alt="" src="images/products/7.jpg" class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Color Box</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 32%;">3.50</span></div>
                                                <div class="price"><del><span class="amount">$120.00</span></del><ins><span class="amount">$110.00</span></ins></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <img alt="" src="images/products/2.jpg" class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Pen</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 85%;">3.50</span></div>
                                                <div class="price"><ins><span class="amount">$240.00</span></ins></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md3 col-lg-3">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <img alt="" src="images/products/9.jpg" class="img-responsive img-fullwidth">
                                                <div class="overlay">
                                                    <div class="btn-add-to-cart-wrapper">
                                                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                                                    </div>
                                                    <div class="btn-product-view-details">
                                                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">Table Lamp</h5></a>
                                                <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 56%;">3.50</span></div>
                                                <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
