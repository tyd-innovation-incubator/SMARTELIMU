@extends('layouts.app')

@section('content')
    <div class="main-content bg-lighter">
        <!-- Section: inner-header -->




        <!-- Section: Course gird -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 blog-pull-right">
                        <div class="row">
                            @foreach(access()->user()->packages as $package)
                                @if($package->ispaid = 1)
                            <div class="col-sm-6 col-md-4">
                                <div class="service-block bg-white">
                                    <div class="thumb"> <img alt="featured project" src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" class="img-fullwidth">
                                        <h4 class="text-white mt-0 mb-0"><span class="price">{!! $package->price !!} TSH</span></h4>
                                    </div>
                                    <div class="content text-left flip p-25 pt-0">
                                        <h4 class="line-bottom mb-10">{!! $package->name !!}</h4>
                                        <p>{!! $package->desciption !!}</p>
                                        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{!! route('lessons.view',$package->uuid) !!}">{!! trans('label.view') !!}</a>
                                    </div>
                                </div>
                            </div>
                                @endif
                                @endforeach
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <ul class="pagination theme-colored xs-pull-center m-0">
                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
{{--    <section class="ct-u-paddingBottom50 ct-u-doubleBorder ct-u-backgroundLightGreen">--}}
{{--        <div class="container">--}}
{{--            <ul class="ct-gallery-filters ct-js-gallery-filters text-uppercase ct-u-doubleBorder" align = "center">--}}
{{--                <li><a data-filter="*" class="btn btn-motive active"><span>Masomo yaliolipiwa</span></a></li>--}}

{{--            </ul>--}}
{{--            <!--content iliolipiwa hapa-->--}}

{{--            <div class="row">--}}
{{--                @foreach(access()->user()->packages as $package)--}}
{{--                    @if($package->invoice->ispaid)--}}
{{--                <div class="col-sm-6 col-md-3">--}}
{{--                    <div class="ct-productBox">--}}
{{--                        <a href="{!! route('lessons.view',$package->uuid) !!}">--}}
{{--                            <div class="ct-productImage">--}}
{{--                                <img src="{!! url('assets/images/content/GRADE_1.jpg') !!}" alt="Product">--}}
{{--                            </div>--}}
{{--                            <div class="ct-productDescription">--}}
{{--                                <h5 class="ct-fw-600 ct-u-marginBottom10">{!! $package->name !!}</h5>--}}
{{--                                <span>{!! $package->category !!}</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="ct-productMeta">--}}
{{--                            <div class="ct-u-displayTableVertical">--}}
{{--                                <div class="ct-u-displayTableCell">--}}
{{--                                    <div class="starrr" data-rating='4'></div>--}}
{{--                                </div>--}}
{{--                                <div class="ct-u-displayTableCell">--}}
{{--                                    <span class="ct-u-colorMotive">{!! $package->price !!}Tsh</span>--}}
{{--                                </div>--}}
{{--                                <div class="ct-u-displayTableCell">--}}
{{--                                    <button class="btn btn-motive"><a href="{!! route('lessons.view',$package->uuid) !!}">{!! trans('label.view') !!}</a></button>--}}
{{--                                </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                    @endif--}}
{{--                    @endforeach--}}

{{--            </div>--}}
{{--            <ul class="ct-gallery-filters ct-js-gallery-filters text-uppercase ct-u-doubleBorder" align = "center">--}}
{{--                <li><a data-filter="*" class="btn btn-motive active"><span>Masomo ya ziada</span></a></li>--}}

{{--            </ul>--}}
{{--            --}}{{--<div class="row">--}}
{{--                --}}{{--<div class="row">--}}

{{--                    --}}{{--<div class="col-sm-6 col-md-3">--}}
{{--                        --}}{{--<div class="ct-productBox">--}}
{{--                            --}}{{--<a href="course-single.html">--}}
{{--                                --}}{{--<div class="ct-productImage">--}}
{{--                                    --}}{{--<img src="{!! url('assets/images/content/GRADE_1.jpg') !!}" alt="Product">--}}
{{--                                --}}{{--</div>--}}
{{--                                --}}{{--<div class="ct-productDescription">--}}
{{--                                    --}}{{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Kwanza</h5>--}}
{{--                                    --}}{{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</a>--}}
{{--                            --}}{{--<div class="ct-productMeta">--}}
{{--                                --}}{{--<div class="ct-u-displayTableVertical">--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<div class="starrr" data-rating='4'></div>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<span class="ct-u-colorMotive">499Tsh</span>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<button class="btn btn-motive"><a href="course-single.html">Jiunge</a></button>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--</a>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</div>--}}
{{--                        --}}{{--</div>--}}
{{--                    --}}{{--</div>--}}
{{--                    --}}{{--<div class="col-sm-6 col-md-3">--}}
{{--                        --}}{{--<div class="ct-productBox">--}}
{{--                            --}}{{--<a href="course-single2.html">--}}
{{--                                --}}{{--<div class="ct-productImage">--}}
{{--                                    --}}{{--<img src="{!! url('assets/images/content/GRAD_2.jpg') !!}" alt="Product">--}}
{{--                                --}}{{--</div>--}}
{{--                                --}}{{--<div class="ct-productDescription">--}}
{{--                                    --}}{{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Pili</h5>--}}
{{--                                    --}}{{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</a>--}}
{{--                            --}}{{--<div class="ct-productMeta">--}}
{{--                                --}}{{--<div class="ct-u-displayTableVertical">--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<div class="starrr" data-rating='4'></div>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<span class="ct-u-colorMotive">499Tsh</span>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<button class="btn btn-motive"><a href="course-single2.html">Jiunge</a></button>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--</a>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</div>--}}
{{--                        --}}{{--</div>--}}
{{--                    --}}{{--</div>--}}
{{--                    --}}{{--<div class="col-sm-6 col-md-3">--}}
{{--                        --}}{{--<div class="ct-productBox">--}}
{{--                            --}}{{--<a href="course-single3.html">--}}
{{--                                --}}{{--<div class="ct-productImage">--}}
{{--                                    --}}{{--<img src="{!! url('assets/images/content/GRADE_3.jpg') !!}" alt="Product">--}}
{{--                                --}}{{--</div>--}}
{{--                                --}}{{--<div class="ct-productDescription">--}}
{{--                                    --}}{{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Tatu</h5>--}}
{{--                                    --}}{{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</a>--}}
{{--                            --}}{{--<div class="ct-productMeta">--}}
{{--                                --}}{{--<div class="ct-u-displayTableVertical">--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<div class="starrr" data-rating='4'></div>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<span class="ct-u-colorMotive">499Tsh</span>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<button class="btn btn-motive"><a href="course-single3.html">Jiunge</a></button>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--</a>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</div>--}}
{{--                        --}}{{--</div>--}}
{{--                    --}}{{--</div>--}}
{{--                    --}}{{--<div class="col-sm-6 col-md-3">--}}
{{--                        --}}{{--<div class="ct-productBox">--}}
{{--                            --}}{{--<a href="course-single4.html">--}}
{{--                                --}}{{--<div class="ct-productImage">--}}
{{--                                    --}}{{--<img src="{!! url('assets/images/content/GRADE_4.jpg') !!}" alt="Product">--}}
{{--                                --}}{{--</div>--}}
{{--                                --}}{{--<div class="ct-productDescription">--}}
{{--                                    --}}{{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Nne</h5>--}}
{{--                                    --}}{{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</a>--}}
{{--                            --}}{{--<div class="ct-productMeta">--}}
{{--                                --}}{{--<div class="ct-u-displayTableVertical">--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<div class="starrr" data-rating='4'></div>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<span class="ct-u-colorMotive">499Tsh</span>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--<div class="ct-u-displayTableCell">--}}
{{--                                        --}}{{--<button class="btn btn-motive"><a href="course-single4.html">Jiunge</a></button>--}}
{{--                                    --}}{{--</div>--}}
{{--                                    --}}{{--</a>--}}
{{--                                --}}{{--</div>--}}
{{--                            --}}{{--</div>--}}
{{--                        --}}{{--</div>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</div>--}}
{{--                --}}{{--<div class="ct-divider ct-u-marginBoth30"></div>--}}
{{--                --}}{{--<div class="clearfix visible-sm"></div>--}}
{{--              --}}{{----}}
{{--            --}}{{--</div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
