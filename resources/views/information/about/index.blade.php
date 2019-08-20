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

                    @lang('label.about_smart_elimu')

                </span>
                </div>
                <!-- <div class="ct-u-displayTableCell text-right">
                    <span class="ct-u-textNormal ct-u-textItalic">
                        <a href="index.html">Features</a> / <a href="#">Wasifu</a>
                    </span>
                </div> -->
            </div>
        </div>
    </div>
    <section class="ct-u-backgroundLightGreen">
        <div class="container">
            <div class="text-center ct-u-marginBottom30">

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>1.   Utangulizi</h3><hr>

                    <blockquote class="ct-blockquote--light ct-fw-400" align="justify">Smart Elimu ni jukwaa la kisasa la kujifunzia masomo kwa njia ya picha jongefu,
                        picha mnato, sauti na maandishi. Jukwaa hili lililozingatia Mtaala wa elimu ya Tanzania
                        lina mfumo uliorahisishwa zaidi ili kumfanya kila mtumiaji afurahie. Smart Elimu inaruhusu
                        kujifunza mtandaoni na nje ya mtandao kupitia kompyuta, “tablet”, simu za mkononi na nje ya
                        mtandao kupitia DVD / CD, na Luninga kupitia vitunza kumbukumbu maalum.
                        <hr align = "center">
                        Masomo yote kama yalivyoandaliwa katika Mtaala wa Tanzania
                        na masomo mengine ya ziada yamebadilishwa na kuwa Picha jongefu,
                        Picha Mnato, Sauti, Majaribio ya Kisayansi na “Simulations”
                        ambapo mwanafunzi anaweza kutumia kwa njia sawa na ile ya kufundishwa na mwalimu darasani.
                        <hr align = "center">
                        Mbali na kuwapa kipato cha ziada walimu wenye uwezo ambao wamechaguliwa kwa umakini kwa kushindanishwa,
                        Smart Elimu inatambua na kuheshimu kazi nzuri za Waandishi wa vitabu wa Tanzania,
                        pia masomo mengine ya ziada yaliyoandaliwa ili kuchagiza Mtaala wa Masomo ulioandaliwa na Serikali.
                        Lengo letu kuu ni kushughulikia changamoto ya upatikanaji wa elimu halisi na bora kwa kila mtoto wa Kitanzania.
                        Smart Elimu pia imeandaa michezo mbalimbali kwa ajili ya watoto wa Elimu ya Awali na Elimu ya msingi
                        ambayo inapatikana bure kwenye jukwaa letu.<br>
                    </blockquote>

                </div>
            </div>

            <div class="row ct-u-paddingTop20">
                <div class="col-sm-4">
                    <h3>2.	Dira yetu</h3><hr>

                    <blockquote class="ct-blockquote--light ct-fw-400">Kujenga jamii yenye elimu halisi na bora</blockquote>
                </div>
                <div class="col-sm-4">
                    <h3>3.	Dhima yetu</h3><hr>

                    <blockquote class="ct-blockquote--light ct-fw-400">Kuwa msanifu bora wa maudhui ya masomo katika mfumo wa “multimedia”
                        na kuhamasisha kila mtu hasa wasiokuwa na uwezo wa kifedha juu ya matumizi ya Teknolojia kwa urahisi
                        ili kupata masomo kwenye mfumo wa “multimedia” kwa mmoja mmoja au shule kwa ujumla.</blockquote>
                </div>
                <div class="col-sm-4">
                    <h3>4.	Wadau wetu</h3><hr>

                    <blockquote class="ct-blockquote--light ct-fw-400">
                        <li>Tanzania Volunteers for Development Trust</li>
                        <li>TYD Innovation Incubator</li>
                        <li>Techniques Audio/Visual Ltd</li>
                    </blockquote>
                </div>
            </div>


            <div class="ct-u-paddingBoth100">
                <div class="row">
                    <div class="col-md-12">
                        <blockquote class="ct-blockquote--light ct-fw-400">
                            Tunapenda kumhimiza kila mzazi / mlezi kumnunulia
                            mtoto wake “tablet” ya bei rahisi ambayo tumeipendekeza ili kunufaika na fursa hii adhimu.
                            <span class="ct-blockquote-author ct-u-colorMotive ct-fw-700 text-uppercase"><a href = "">Smart Elimu Team</a></span>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
        <div class=" text-center ct-u-marginBottom60">
            <h3 class="text-uppercase ct-fw-600">SMART ELIMU NI CHAGUO LA KILA MZAZI, MLEZI NA MWANAFUNZI</h3>
        </div>



        <section class="ct-mediaSection ct-u-colorWhite text-left" data-stellar-background-ratio="1" data-height="600" data-type="parallax" data-background="assets/images/content/STATISTICS_1.jpg" data-background-mobile="assets/images/content/banner-image2.jpg">
            <div class="ct-mediaSection-inner">
                <div class="container">
                    <div class="ct-showcaseBox">
                        <div class="alert alert-info " role="alert" >

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
                </div>
            </div>
        </section>
    </section>
    <div class="ct-u-backgroundGradient ct-u-paddingBoth100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                        <div class="ct-counterBox--body">
                            <span class="ct-js-counter ct-counter" data-ct-to="567" data-ct-speed="5000">0</span>
                            <p class="text-capitalize">
                                Wanafunzi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                        <div class="ct-counterBox--body">
                            <span class="ct-js-counter ct-counter" data-ct-to="998" data-ct-speed="5000">0</span>
                            <p class="text-capitalize">
                                Wazazi / Walezi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                        <div class="ct-counterBox--body">
                            <span class="ct-js-counter ct-counter" data-ct-to="735" data-ct-speed="5000">0</span>
                            <p class="text-capitalize">
                                Walimu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ct-counterBox ct-counterBox-circle text-center ct-fw-300">
                        <div class="ct-counterBox--body">
                            <span class="ct-js-counter ct-counter" data-ct-to="888" data-ct-speed="5000">0</span>
                            <p class="text-capitalize">
                                Wadau
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection