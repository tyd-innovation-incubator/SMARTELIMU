@extends('layouts.main')

@section('content')

    <div class="ct-site--map ct-u-backgroundGradient">
        <div class="container">
            <div class="ct-u-displayTableVertical text-capitalize">
                <div class="ct-u-displayTableCell">
                <span class="ct-u-textBig">
                    {!! $package->name !!}
                </span>
                </div>
                <div class="ct-u-displayTableCell text-right">
                <span class="ct-u-textNormal ct-u-textItalic">
                    <a href="course-single.html">Nyumbani</a> / <a href="course-single2.html">Darasa linalofata</a>
                </span>
                </div>
            </div>
        </div>
    </div>
    <section class="ct-u-paddingBoth100 ct-u-doubleBorder ct-u-backgroundLightGreen">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="ct-sidebarProducts">
                        <div class="ct-productBox">
                            <a href="course-single.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('img/content/'.$package->image.'') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h4 class="ct-fw-600">{!! $package->category !!}</h4>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">{!! number_1_format($package->price) !!}Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <a href="#">83 Student <i class="fa fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ct-sidebarNavigation">
                            <ul class="list-unstyled">
                                <li class="ct-fw-700"><a href="#"><i class="fa fa-paper-plane-o"></i>Nyumbani</a></li>
                                <li class="ct-fw-700"><a href="#"><i class="fa fa-laptop"></i>Silabasi</a></li>
                                <li class="ct-fw-700"><a href="#"><i class="fa fa-user"></i>Wadau</a></li>
                                <li class="ct-fw-700"><a href="#"><i class="fa fa-comments-o"></i>Picha Mjomgeo</a></li>
                                <li class="ct-fw-700"><a href="#"><i class="fa fa-stack-overflow"></i>Katuni mjongeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden-lg hidden-md ct-u-marginBottom30"></div>
                <div class="col-md-8">
                    <div class="ct-textBox ct-textBox--price ct-u-displayTableVertical ct-u-marginBottom30">
                        <div class="ct-u-displayTableCell text-left">
                            <span class="ct-fw-600">Price :</span> <span class="ct-u-colorMotive">{!! number_1_format($package->price) !!} Tsh</span>
                        </div>
                        <div class="ct-u-displayTableCell text-right">
                            <button type="submit" class="btn btn-primary text-capitalize">
                                take this course
                            </button>
                        </div>
                    </div>
                    <div class="ct-textBox">
                        <h4 class="ct-fw-600 ct-u-marginBottom40" style="color: #0b0b0b">
                            {!! $package->description !!}
                        </h4>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-list-alt"></i> Kuhesabu
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        One morning, when Gregor Samsa woke from troubled dreams, he found him
                                        self transformed in his bed into a horrible vermin. He lay on his armour-like ba
                                        ck, and if he lifted his head a little he could see his brown belly, slightly domed
                                        and divided by arches into stiff sections. The bedding was hardly able to cover
                                        it and seemed ready
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-angellist"></i> Kuandika
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        One morning, when Gregor Samsa woke from troubled dreams, he found him
                                        self transformed in his bed into a horrible vermin. He lay on his armour-like ba
                                        ck, and if he lifted his head a little he could see his brown belly, slightly domed
                                        and divided by arches into stiff sections. The bedding was hardly able to cover
                                        it and seemed ready
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-files-o"></i> Kingereza
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-files-o"></i> Touchable Slider
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        One morning, when Gregor Samsa woke from troubled dreams, he found him
                                        self transformed in his bed into a horrible vermin. He lay on his armour-like ba
                                        ck, and if he lifted his head a little he could see his brown belly, slightly domed
                                        and divided by arches into stiff sections. The bedding was hardly able to cover
                                        it and seemed ready
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fa fa-desktop"></i> Kusoma
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        One morning, when Gregor Samsa woke from troubled dreams, he found him
                                        self transformed in his bed into a horrible vermin. He lay on his armour-like ba
                                        ck, and if he lifted his head a little he could see his brown belly, slightly domed
                                        and divided by arches into stiff sections. The bedding was hardly able to cover
                                        it and seemed ready
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
