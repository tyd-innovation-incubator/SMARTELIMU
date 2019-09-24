@push('after-styles')

<style>
    #image_box
    {
        max-width:150px;
    }

    .holderCircle { width: 500px; height: 500px; border-radius: 100%; margin: 60px auto; position: relative; }


    .dotCircle { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 20; }
    .dotCircle  .itemDot { display: block; width: 80px; height: 80px; position: absolute; background: #ffffff; color: #7d4ac7; border-radius: 20px; text-align: center; line-height: 80px; font-size: 30px; z-index: 3; cursor: pointer; border: 2px solid #e6e6e6; }
    .dotCircle  .itemDot .forActive { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
    .dotCircle  .itemDot .forActive::after { content: ''; width: 5px; height: 5px; border: 3px solid #7d4ac7; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
    .dotCircle  .itemDot .forActive::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #a733bb; right: -39px; }
    .dotCircle  .itemDot.active .forActive { display: block; }
    .round { position: absolute; left: 40px; top: 45px; width: 410px; height: 410px; border: 2px dotted #a733bb; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
    .dotCircle .itemDot:hover, .dotCircle .itemDot.active { color: #ffffff; transition: 0.5s;   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d4ac7+0,a733bb+100 */ background: #7d4ac7; /* Old browsers */ background: -moz-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* FF3.6-15 */ background: -webkit-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* Chrome10-25,Safari5.1-6 */ background: linear-gradient(to right, #7d4ac7 0%, #a733bb 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d4ac7', endColorstr='#a733bb', GradientType=1); /* IE6-9 */ border: 2px solid #ffffff; -webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); -moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); }
    .dotCircle .itemDot { font-size: 40px; }
    .contentCircle { width: 250px; border-radius: 100%; color: #222222; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
    .contentCircle .CirItem { border-radius: 100%; color: #222222; position: absolute; text-align: center; bottom: 0; left: 0; opacity: 0; transform: scale(0); transition: 0.5s; font-size: 15px; width: 100%; height: 100%; top: 0; right: 0; margin: auto; line-height: 250px; }
    .CirItem.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
    .contentCircle .CirItem i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #000000; opacity: 0.1; }
    @media only screen and (min-width:300px) and (max-width:599px) {
        .holderCircle { width: 300px; height: 300px; margin: 110px auto; }
        .holderCircle::after { width: 100%; height: 100%; }
        .dotCircle { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
    }
    @media only screen and (min-width:600px) and (max-width:767px) { }
    @media only screen and (min-width:768px) and (max-width:991px) { }
    @media only screen and (min-width:992px) and (max-width:1199px) { }
    @media only screen and (min-width:1200px) and (max-width:1499px) { }
    .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1; }
    .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #640178; }
    .title-box p {font-size: 17px; line-height: 2em; }



    .aboutus-area {
        padding-top:120px;
        padding-bottom:120px;
    }
    /*-- aboutus Image --*/
    .aboutus-image {
        margin-right: 52px;
        width: 318px; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .aboutus-image {
            margin-right: 35px;
            width: 345px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .aboutus-image {
            margin-bottom: 30px;
            float: none; } }
    @media only screen and (max-width: 767px) {
        .aboutus-image {
            margin-bottom: 30px;
            margin-right: 0;
            float: none;
            width: auto; } }
    .aboutus-image img {
        width: 100%; }

    /*-- aboutus Content --*/
    .aboutus-content h1 {
        font-size: 40px;
        font-weight: 800;
        line-height: 40px;
        margin-bottom: 2px; }
    @media only screen and (max-width: 479px) {
        .aboutus-content h1 {
            font-size: 30px;
            line-height: 30px; } }
    .aboutus-content h1 span {
        color: #ffc107; }

    .aboutus-content h4 {
        font-size: 18px;
        font-weight: 500;
        color: #9b9b9b;
        margin-bottom: 23px; }

    .aboutus-content p {
        font-size: 16px;
        line-height: 27px; }

    /*-- counter --*/
    .counter {
        border: 1px solid #eeeeee;
        margin-top: 32px;
        float: left;
        width: 100%; }
    .counter .single-counter {
        float: left;
        width: 25%;
        padding: 28px 15px 28px; }
    @media only screen and (max-width: 767px) {
        .counter .single-counter {
            width: 50%; }
        .counter .single-counter:nth-child(3) {
            border-top: 1px solid #eeeeee;
            border-left: 0px solid #eeeeee; }
        .counter .single-counter:nth-child(4) {
            border-top: 1px solid #eeeeee; } }
    .counter .single-counter + .single-counter {
        border-left: 1px solid #eeeeee; }
    .counter .single-counter h2 {
        font-size: 30px;
        color: #ffc107;
        line-height: 24px;
        font-family: "Open Sans", sans-serif;
        margin-bottom: 8px; }
    .counter .single-counter p {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 0;
        color: #8f8f8f; }


    .carousel-item {
        height: 70vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    /* Carousel */

    #quote-carousel {
        padding: 0 10px 30px 10px;
        margin-top: 30px;
        /* Control buttons  */
        /* Previous button  */
        /* Next button  */
        /* Changes the position of the indicators */
        /* Changes the color of the indicators */
    }
    #quote-carousel .carousel-control {
        background: none;
        color: #CACACA;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }
    #quote-carousel .carousel-control.left {
        left: -60px;
    }
    #quote-carousel .carousel-control.right {
        right: -60px;
    }
    #quote-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
    #quote-carousel .carousel-indicators li {
        width: 50px;
        height: 50px;
        margin: 5px;
        cursor: pointer;
        border: 4px solid #CCC;
        border-radius: 50px;
        opacity: 0.4;
        overflow: hidden;
        transition: all 0.4s;
    }
    #quote-carousel .carousel-indicators .active {
        background: #333333;
        width: 128px;
        height: 128px;
        border-radius: 100px;
        border-color: #f33;
        opacity: 1;
        overflow: hidden;
    }
    .carousel-inner {
        min-height: 300px;
    }
    .item blockquote {
        border-left: none;
        margin: 0;
    }
    .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }

</style>
@endpush

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item " style="background-image: url('img/SMS-messaging-service-provider.jpg')">
            <div class="carousel-caption d-none d-md-block">
                {{--<h2 class="display-4">First Slide</h2>--}}
                {{--<p class="lead">This is a description for the first slide.</p>--}}
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/for-enterprise.gif')">
            <div class="carousel-caption d-none d-md-block">
                {{--<h2 class="display-4">Second Slide</h2>--}}
                {{--<p class="lead">This is a description for the second slide.</p>--}}
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/slider2.png')">
            <div class="carousel-caption d-none d-md-block">
                {{--<h2 class="display-4">Third Slide</h2>--}}
                {{--<p class="lead">This is a description for the third slide.</p>--}}
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>