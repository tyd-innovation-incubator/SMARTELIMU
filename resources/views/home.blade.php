@extends('layouts.main')

@section('content')

    {{--Header--}}

    <header>
        <div class="ct-slick ct-js-slick ct-slick-defaultNavigation" data-height="500" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="true" data-autoplaySpeed="6000" data-draggable="false" data-touchMove="false" data-arrows="true" data-items="1">
            @foreach($homeslides as $homeslide)
                <div class="item" data-bg="{!! url('http://admin.smartelimu.ac.tz/img/homeslides/'.$homeslide->image.'') !!}">
                    <div class="ct-slick-inner">
                        <div class="ct-slick-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 ">
                                        <h3 class="text-capitalize ct-fw-900 ct-u-marginBottom40 animated" data-fx="bounceInDown" data-time="200">{!! $homeslide->title !!}</h3>
                                        <p class="ct-u-marginBottom40 ct-fw-600 animated" data-fx="bounceInLeft" data-time="400">{!! $homeslide->content !!} </p>
                                        <a class="text-uppercase btn btn-primary btn-lg animated" data-fx="bounceInUp" data-time="200" href="#packages">view courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </header>


    {{--our services--}}

    <section class="ct-u-paddingBoth100 text-center">
        <div class="container">
            <h2 class="ct-fw-700 ct-u-marginBottom30">MAADILI YETU YA MSINGI</h2>
            <p class="ct-fw-600 ct-u-marginBottom100">Jukwaa hili lililozingatia Mtaala wa elimu ya Tanzania lina mfumo uliorahisishwa zaidi ili kumfanya kila mtumiaji afurahie.
                Smart Elimu inaruhusu kujifunza mtandaoni na nje ya mtandao kupitia kompyuta,
            </p>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="ct-iconBox ct-iconBox--Big ct-iconBox--transparent">
                        <div class="ct-u-relative" data-bottom="top: -50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">

                            <img class="item" src="assets/images/content/UGUNDUZI_(130_X_130).png"></img>
                        </div>
                        <div class="ct-icon--description">
                            <h4 class="ct-u-colorMotive ct-fw-600 ct-u-marginBottom30">UGUNDUZI</h4>
                            <p class="ct-fw-400 ct-u-relative" data-bottom="top: 50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-150-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">Silaha yetu kuu ni ugunduzi ili kutoa yaliyo bora kwenye elimu</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-iconBox ct-iconBox--Big ct-iconBox--transparent">
                        <div class="ct-u-relative"  data-bottom="top: -50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">
                            <img class="item" src="assets/images/content/UWAJIBIKAJI_(130_X_130).png"></img>
                        </div>
                        <div class="ct-icon--description">
                            <h4 class="ct-u-colorMotive ct-fw-600 ct-u-marginBottom30">UWAJIBIKAJI</h4>
                            <p class="ct-fw-400 ct-u-relative"  data-bottom="top: 50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-150-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">Sisi pamoja na Wadau wetu tunawajibika kwenye majukumu yetu</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-iconBox ct-iconBox--Big ct-iconBox--transparent">
                        <div class="ct-u-relative"   data-bottom="top: -50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">
                            <img class="item" src="assets/images/content/USHIRIKISHAJI_(130_X_130).png"></img>
                        </div>

                        <div class="ct-icon--description">
                            <h4 class="ct-u-colorMotive ct-fw-600 ct-u-marginBottom30">USHIRIKISHAJI</h4>
                            <p class="ct-fw-400 ct-u-relative"  data-bottom="top: 50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-150-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">Fumbuzi zetu za kielimu ni shirikishi</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-iconBox ct-iconBox--Big ct-iconBox--transparent">
                        <div class="ct-u-relative"   data-bottom="top: -50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">
                            <img class="item" src="assets/images/content/UADILIFU_(130_X_130).png"></img>
                        </div>

                        <div class="ct-icon--description">
                            <h4 class="ct-u-colorMotive ct-fw-600 ct-u-marginBottom30">UADILIFU</h4>
                            <p class="ct-fw-400 ct-u-relative"  data-bottom="top: 50px;
                                        -moz-opacity: 0;
                                            -khtml-opacity: 0;
                                                -webkit-opacity: 0;
                                                    opacity: 0;"  data-150-center-top="top: 0;
                                                -moz-opacity: 1;
                                                    -khtml-opacity: 1;
                                                        -webkit-opacity: 1;
                                                            opacity: 1;">Tunawajali wateja wetu kwa kuwapa Fumbuzi za kuaminika</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--join us section--}}
    <section class="ct-mediaSection text-center" data-stellar-background-ratio="1" data-height="600" data-type="parallax" data-background="assets/images/content/banner-image2.jpg" data-background-mobile="assets/images/content/banner-image2.jpg">
        <div class="ct-mediaSection-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="alert alert-info ct-u-marginTop50" >
                            <form class="ct-u-paddingBottom100">
                                <input placeholder="Jina" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Name">
                                <input placeholder="Namba ya Simu" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Namba ya simu">
                                <input placeholder="Barua pepe" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Password">
                                <input placeholder="Nywila" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Repeat">
                                <input placeholder="Rudia Nywila" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg ct-u-marginBottom50" title="Repeat">

                                <P>Je wewe unasubiri nini?	<a class="text-uppercase btn btn-primary btn-lg ct-u-marginBottom30 btn-fullWidth" href="">Jiunge Sasa</a></P>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">


                        <h3 class="ct-fw-500 ct-u-colorWhite ct-u-marginBottom60 ct-u-relative" data-bottom="bottom: 70px;
		-moz-opacity: 0;
			-khtml-opacity: 0;
				-webkit-opacity: 0;
					opacity: 0;" data-center-center="bottom: 0;
				-moz-opacity: 1;
					-khtml-opacity: 1;
						-webkit-opacity: 1;
							opacity: 1;" style="padding-left:60px" >Maelfu ya wanafunzi wanatumia Smart Elimu katika kujiongezea ufahamu wa taaluma zao, wewe unasubiri nini? jiunge nasi leo
                        </h3>



                        <div class="container1 ct-u-paddingBoth100">
                            </br><div class="row">
                                <div class="col-sm-6 col-md-4" >
                                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                                        <div class="ct-counterBox--body">
                                            <span class="ct-js-counter ct-counter" data-ct-to="567" data-ct-speed="5000">0</span>
                                            <p class="text-capitalize">
                                                Wanafunzi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4" >
                                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                                        <div class="ct-counterBox--body">
                                            <span class="ct-js-counter ct-counter" data-ct-to="998" data-ct-speed="5000">0</span>
                                            <p class="text-capitalize">
                                                Wazazi / Walezi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                                        <div class="ct-counterBox--body">
                                            <span class="ct-js-counter ct-counter" data-ct-to="735" data-ct-speed="5000">0</span>
                                            <p class="text-capitalize">
                                                Wadau
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>

                </div>
                {{--<a align="center" class="text-uppercase btn btn-primary btn-lg" href="courses-listing3.html" >Peruzi Masomo</a>--}}
            </div>
        </div>
    </section>


    {{--subjects / courses--}}
    <section class="ct-u-paddingBoth100 ct-u-backgroundLightGreen" id="packages">

        <div class="container">
            <div class="ct-slick ct-js-slick" data-adaptiveHeight="true" data-animations="true" data-autoplay="true" data-infinite="true" data-autoplaySpeed="6000" data-draggable="false" data-touchMove="false" data-arrows="true" data-items="1">
                <div class="item">
                    <h2 class="ct-fw-500">Masomo ya ziada ndani ya Silabasi</h2>
                    <div class="ct-divider ct-u-marginBoth30"></div>
                    <p class="ct-u-marginBottom90">
                        Haya ni Masomo ambayo hayamo kwenye silabasi yetu ya Tanzania lakini yatamuongezea mwanafunzi maarifa ya ziada.

                    </p>
                    <div class="row">
                        @foreach($packages as $package)
                        <div class="col-sm-6 col-md-3">
                            <div class="ct-productBox">
                                <a href="{!! route('lessons.view',$package->uuid) !!}">
                                    <div class="ct-productImage">
                                        <img src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$package->image.'') !!}" alt="Product">
                                    </div>
                                    <div class="ct-productDescription">
                                        <h5 class="ct-fw-600 ct-u-marginBottom10">{!! $package->name !!}</h5>
                                        <span>{!! truncateString($package->description,100) !!}</span>
                                    </div>
                                </a>
                                <div class="ct-productMeta">
                                    <div class="ct-u-displayTableVertical">
                                        <div class="ct-u-displayTableCell">
                                            <div class="starrr" data-rating='4'></div>
                                        </div>
                                        <div class="ct-u-displayTableCell">
                                            <span class="ct-u-colorMotive">{!! number_1_format($package->price) !!}Tsh</span>
                                            {{--<span class="ct-u-textLineThrough">1000$</span>--}}
                                        </div>
                                        <a href="#">
                                            <div class="ct-u-displayTableCell">
                                                15 <i class="fa fa-user"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
                {{--<div class="item">--}}
                    {{--<h2 class="ct-fw-500">Masomo yanayotembelewa zaidi Mtandaoni</h2>--}}
                    {{--<div class="ct-divider ct-u-marginBoth30"></div>--}}
                    {{--<p class="ct-u-marginBottom90">--}}
                        {{--Haya ndo Masomo Yanayotembelewa zaidi.--}}

                    {{--</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6 col-md-3">--}}
                            {{--<div class="ct-productBox">--}}
                                {{--<a href="#">--}}
                                    {{--<div class="ct-productImage">--}}
                                        {{--<img src="assets/images/content/GRADE_3_SLIDING_(270_X_170).jpg" alt="Product">--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-productDescription">--}}
                                        {{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la Tatu</h5>--}}
                                        {{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<div class="ct-productMeta">--}}
                                    {{--<div class="ct-u-displayTableVertical">--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<div class="starrr" data-rating='4'></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<span class="ct-u-colorMotive">499Tsh</span>--}}
                                            {{--<span class="ct-u-textLineThrough">500Tsh</span>--}}
                                        {{--</div>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="ct-u-displayTableCell">--}}
                                                {{--15 <i class="fa fa-user"></i>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6 col-md-3">--}}
                            {{--<div class="ct-productBox">--}}
                                {{--<a href="#">--}}
                                    {{--<div class="ct-productImage">--}}
                                        {{--<img src="assets/images/content/GRADE_4_SLIDING_(270_X_170).jpg" alt="Product">--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-productDescription">--}}
                                        {{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la nne</h5>--}}
                                        {{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<div class="ct-productMeta">--}}
                                    {{--<div class="ct-u-displayTableVertical">--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<div class="starrr" data-rating='4'></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<span class="ct-u-colorMotive">599Tsh<span>--}}
                                            {{--<span class="ct-u-textLineThrough">700Tsh</span>--}}
                                        {{--</div>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="ct-u-displayTableCell">--}}
                                                {{--15 <i class="fa fa-user"></i>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6 col-md-3">--}}
                            {{--<div class="ct-productBox">--}}
                                {{--<a href="#">--}}
                                    {{--<div class="ct-productImage">--}}
                                        {{--<img src="assets/images/content/GRADE_1_SLIDING_(270_X_170).jpg" alt="Product">--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-productDescription">--}}
                                        {{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la kwanza</h5>--}}
                                        {{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<div class="ct-productMeta">--}}
                                    {{--<div class="ct-u-displayTableVertical">--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<div class="starrr" data-rating='4'></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<span class="ct-u-colorMotive">499Tsh</span>--}}
                                            {{--<span class="ct-u-textLineThrough">699Tsh</span>--}}
                                        {{--</div>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="ct-u-displayTableCell">--}}
                                                {{--15 <i class="fa fa-user"></i>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6 col-md-3">--}}
                            {{--<div class="ct-productBox">--}}
                                {{--<a href="#">--}}
                                    {{--<div class="ct-productImage">--}}
                                        {{--<img src="assets/images/content/GRADE_2_SLIDING_(270_X_170).jpg" alt="Product">--}}
                                    {{--</div>--}}
                                    {{--<div class="ct-productDescription">--}}
                                        {{--<h5 class="ct-fw-600 ct-u-marginBottom10">Darasa la pili</h5>--}}
                                        {{--<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean .</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<div class="ct-productMeta">--}}
                                    {{--<div class="ct-u-displayTableVertical">--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<div class="starrr" data-rating='4'></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="ct-u-displayTableCell">--}}
                                            {{--<span class="ct-u-colorMotive">499Tsh</span>--}}
                                            {{--<span class="ct-u-textLineThrough">699Tsh</span>--}}
                                        {{--</div>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="ct-u-displayTableCell">--}}
                                                {{--15 <i class="fa fa-user"></i>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

    </section>


    {{--testimonial--}}

    <div class="ct-divider ct-u-marginBoth100"></div>
    <div class=" text-center ct-u-marginBottom60">
        <h3 class="ct-fw-600 text-uppercase">USHUHUDA</h3>
    </div>

    <div class="row ct-u-marginBottom100" align="center">

        @foreach($testimonies as $testimony)
            <div class="col-md-4">
                <div class="ct-personBox ct-personBox--inline">
                    <div class="ct-personMedia ct-u-displayTableVertical">
                        <div class="ct-u-displayTableCell">
                            <div class="ct-personImage">
                                <img src="{!! url('http://admin.smartelimu.ac.tz/img/testimonials/'.$testimony->image.'') !!}" alt="person">
                            </div>
                        </div>
                        <div class="ct-u-displayTableCell">
                            <div class="ct-personName">
                                <span class="ct-personName--title ct-fw-700">
                                    {!! $testimony->name !!}
                                </span>
                                <span class="ct-personName--meta text-lowercase">
                                    {!! $testimony->occupation !!}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ct-personDescription">
                        <p>
                            {!! truncateString($testimony->message,150) !!}
                            <a href="#">Moree..</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
