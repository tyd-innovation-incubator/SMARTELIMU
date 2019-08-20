@extends('layouts.main')

@section('content')

    <section class="ct-u-paddingBottom50 ct-u-doubleBorder ct-u-backgroundLightGreen">
        <div class="container">
            <ul class="ct-gallery-filters ct-js-gallery-filters text-uppercase ct-u-doubleBorder" align = "center">
                <li><a data-filter="*" class="btn btn-motive active"><span>Masomo yaliolipiwa</span></a></li>

            </ul>
            <!--content iliolipiwa hapa-->

            <p class="alart">Hakuna masomo yaliolopiwa kwa sasa!<a href = "#"> soma zaidi</a></p>

            <ul class="ct-gallery-filters ct-js-gallery-filters text-uppercase ct-u-doubleBorder" align = "center">
                <li><a data-filter="*" class="btn btn-motive active"><span>Masomo ya ziada</span></a></li>

            </ul>
            <div class="row">
                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_1.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Kwanza</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single2.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRAD_2.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Pili</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single2.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single3.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_3.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Tatu</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single3.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single4.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_4.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Nne</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single4.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct-divider ct-u-marginBoth30"></div>
                <div class="clearfix visible-sm"></div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single5.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_5.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Tano</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single5.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single6.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_6_(370_X_350).jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Sita</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single6.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single7.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/GRADE_7.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Saba</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single7.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="necta-pre.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/EXAMS_PRIMARY_SCHOOL.jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Jipime</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="necta-pre.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct-divider ct-u-marginBoth30"></div>
                <div class="clearfix visible-sm"></div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="ct-productBox">
                            <a href="course-single8.html">
                                <div class="ct-productImage">
                                    <img src="{!! url('assets/images/content/FORM_1_(370_X_350).jpg') !!}" alt="Product">
                                </div>
                                <div class="ct-productDescription">
                                    <h5 class="ct-fw-600 ct-u-marginBottom10">Kidato cha Kwanza</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>
                                </div>
                            </a>
                            <div class="ct-productMeta">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="starrr" data-rating='4'></div>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-u-colorMotive">499Tsh</span>
                                    </div>
                                    <div class="ct-u-displayTableCell">
                                        <button class="btn btn-motive"><a href="course-single8.html">Jiunge</a></button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
