


{{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
        {{--<footer id="footer">--}}
            {{--<div class="footer-copyright">--}}
                {{--<div class="container py-2">--}}
                    {{--<div class="row py-4">--}}
                        {{--<div class="col-lg-1">--}}
                            {{--<img src="{{ url("img/logo-nextsms.png") }}" width="100" height="45" alt="{{ config("app.name") }}" />--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">--}}
                            {{--<p>© Copyright 2019. All Rights Reserved.</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">--}}
                            {{--<p>Developed  By <a href="http://www.nextbyte.co.tz" target="_blank">Nextbyte</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</footer>--}}
    {{--</div>--}}
{{--</div>--}}

<footer class="main-footer footer-dark"{{-- style="position: fixed; bottom: 0px; width: 100%"--}}>
    <div class="auto-container">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-widget normal-widget">
                        <br>
                        <div class="text-left"><img src="{{ url("img/logo-nextsms.png") }}" alt=""></div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <h2>Services List</h2>
                        <div class="row clearfix">
                            <ul class="col-md-6 col-sm-6 col-xs-12">
                                <li><a href="https://nexthost.co.tz" target="_blank">Web Hosting</a></li>

                                <li><a href="https://nextbyte.co.tz/blog/" target="_blank">Blog</a></li>
                                <li><a href="https://nextbyte.co.tz" target="_blank">Company Website</a></li>

                            </ul>

                            <ul class="col-md-6 col-sm-6 col-xs-12">

                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-widget contact-widget">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><span class="icon icon-call-out"></span> 0787 275 482</li>
                            <li><span class="icon icon-envelope-open"></span> info@nextbyte.co.tz</li>
                            <li><span class="icon icon-location-arrow"></span> Madai Crescent RD, Ada Estate Kinondoni</li>
                            {{--<li><span class="icon icon-share"></span> <a class="social-link" href="#"><span class="fa fa-facebook-f"></span></a> &ensp; <a class="social-link" href="#"><span class="fa fa-twitter"></span></a> &ensp; <a class="social-link" href="#"><span class="fa fa-google-plus"></span></a> &ensp; <a class="social-link" href="#"><span class="fa fa-instagram"></span></a></li>--}}
                        </ul>

                        <!--Newsletter Form-->

                        <div class="newsletter-form">

                            {{--<form method="post" action="http://html.tonatheme.com/html/digital-plus/contact.html">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="email" name="email" value="" placeholder="Email Here" required>--}}
                                    {{--<button type="submit">GO</button>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        </div>


                    </div>
                </div>

            </div>
        </div>

        <!--Footer Upper-->
        <div class="footer-bottom">
            <div class="text-center">copyright &copy; {!! \Carbon\Carbon::now()->format('Y') !!}.<a href="https://nextbyte.co.tz/">NEXTBYTE ICT SOLUTION</a> </div>
        </div>

    </div>
</footer>
