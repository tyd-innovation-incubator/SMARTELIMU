@extends('layouts.app')
@push('after-styles')
    <style>

    </style>
@endpush
@section('content')

    <div class="main-content">
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="product">
{{--                            <div class="col-md-5">--}}
{{--                                <div class="product-image">--}}
{{--                                    <div class="zoom-gallery">--}}
{{--                                        <a href="images/products/lg1.jpg" title="Title Here 1">--}}
{{--                                            <img src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" alt=""></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="doctor-thumb">
                                    <img src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" alt="" width="400">
{{--                                    <img src="{!! url('img/content/1565768245.jpg') !!}" alt="">--}}
                                </div>
                                <div class="info p-20 bg-black-333">
                                    <div class="font-36 pl-20 text-white text-left pr-20 p-10">
                                        <h2 style="text-decoration-color: black;font-weight: 700;text-align: center"><span>{!! trans('label.price') !!} : </span><sup>TSH</sup>{!! $package->price !!}</h2>

                                    </div>


                                    @if($package->ispaid == 1 )
{{--                                        <button class="btn btn-dark btn-theme-colored btn-xl" style="width: 100%" href="{!! route('lessons.view',$package->uuid) !!}" type="submit">{!! trans('label.view') !!}</button>--}}

                                    @else
                                        <form enctype="multipart/form-data" method="get" class="cart" action="{!! route('package.create_invoice',$package->uuid) !!}">
                                            <input type="hidden" value=" {!! $package->uuid !!}
                                                " name="package">
                                            <button class="btn btn-dark btn-theme-colored btn-xl" style="width: 100%" href="{!! route('lessons.view',$package->uuid) !!}" type="submit">{!! trans('label.take_course') !!}</button>
                                        </form>

                                        </p>
                                        <p>
                                        <form enctype="multipart/form-data" method="get" class="cart" action="{!! route('package.create_invoice',$package->uuid) !!}">
                                            <input type="hidden" value=" {!! $package->uuid !!}
                                                " name="package">
                                            <button class="btn btn-default btn-theme-colored btn-xl" style="width: 100%" href="{!! route('lessons.view',$package->uuid) !!}" type="submit">{!! trans('label.add_cart') !!}</button>
                                        </form>
                                        </p>

                                        @endif


{{--                                    <h5 style="margin-top: 30px">{!! trans('label.course_include') !!}</h5>--}}
{{--                                    <ul class="list-icon">--}}
{{--                                        <li><i class="fa fa-clock-o"></i>27hrs for videos</li>--}}
{{--                                        <li><i class="fa fa-hand-o-right"></i>75 articles for download</li>--}}
{{--                                        <li><i class="fa fa-thumbs-o-up"></i>3hrs for examinations</li>--}}
{{--                                        <li><i class="fa fa-pencil-square-o"></i>Certificate for complete </li>--}}
{{--                                    </ul>--}}


                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="container-fluid" >
                                    <div class="product-summary">
                                        <h2 class="product-title" style="font-size: 36px;font-weight: 600">  {!! $package->name !!}
                                        </h2>

                                        <div class="product_review">
                                            <ul class="review_text list-inline">
                                                <li>
                                                    <div class="badge badge-primary">
                                                        {!! isset($package->category)? $package->category:'' !!}
                                                    </div>
                                                </li>

{{--                                                <li>--}}
{{--                                                    <div title="Rated 4.50 out of 5" class="star-rating"><span style="width: 90%;">4.50</span></div>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#"><span>2 </span>Reviews</a></li>--}}
{{--                                                <li><a href="#">Add reviews</a></li>--}}
                                            </ul>
                                        </div>

                                        <div class="single-service">

                                            <p>  {!! $package->description !!}
                                            </p>

                                            <h4 class="line-bottom mt-20 mb-20 text-theme-colored">{!! trans('label.all_course_content') !!}</h4>

                                            <h5 class="line-bottom mt-20 mb-20 text-theme-colored">{!! trans('label.syllabus') !!}</h5>

                                            @if(isset($syllabus))
                                            <p>{!!  $syllabus->name !!}</p>
                                            <img href="{!! url('https://admin.smartelimu.ac.tz/files/'.$syllabus->file.'') !!}" target="_blank">
                                                @endif

                                        </div>



                                        <h5 class="line-bottom mt-20 mb-20 text-theme-colored">{!! trans('label.course') !!}</h5>


                                                <div class="row">
                                                    <div id="proposalAccordion" class="panel-group">
                                                        @foreach($package->subjects as $subject)

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h1 class="panel-title"><b>{!! $subject->name !!}</b></h1>
                                                                </div>
                                                                <ul class="list-group">
                                                                    @foreach($subject->chapters as $chapter)
                                                                    <li class="list-group-item">
                                                                        <div class="row toggle" id="dropdown-detail-{!! $chapter->id !!}" data-toggle="detail-{!! $chapter->id !!}">
                                                                            <div class="col-xs-10">
                                                                               <strong>{!! $chapter->name !!}</strong>
                                                                            </div>
                                                                            <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                                                                        </div>
                                                                        <div id="detail-{!! $chapter->id !!}">
                                                                            <ul class="list theme-colored angle-double-right">
                                                                                <li>link for a video </li>
                                                                                <li>Link for download article</li>
                                                                                <li>Link for examinations </li>
                                                                            </ul>

                                                                        </div>
                                                                    </li>
                                                                   @endforeach
                                                                </ul>
                                                            </div>
{{--                                                        <div class="panel panel-default">--}}
{{--                                                            <div class="panel-heading">--}}
{{--                                                                <h4 class="panel-title">--}}
{{--                                                                    <a data-toggle="collapse" data-parent="#proposalAcoordion" href="#{!! $subject->id !!}">{!! $subject->name !!}</a>--}}
{{--                                                                </h4>--}}

{{--                                                            </div>--}}
{{--                                                            <div id="{!! $subject->id !!}" class="panel-collapse collapse in">--}}
{{--                                                                <div class="panel-body">--}}
{{--                                                                    @foreach($subject->chapters as $chapter)--}}

{{--                                                                        <ol>--}}
{{--                                                                            <li>--}}
{{--                                                                                {!! $chapter->name !!}--}}

{{--                                                                            </li>--}}
{{--                                                                        </ol>--}}

{{--                                                                        @endforeach--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                            @endforeach
                                                    </div>
                                                </div>




                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <h3 class="line-bottom">{!! trans('label.related_course') !!}</h3>
                            <div class="row multi-row-clearfix">
{{--                               FOR RELATED COURSE--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('after-script')
    <script>


    </script>

@endpush

