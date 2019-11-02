@extends('layouts.app', ['title' => 'Habari', 'header' =>'Habari'])

@push('after-styles')

<style>
    #image_box
    {

        max-width:200px; /* or whatever width you want. */

    }
</style>
@endpush

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Divider: Contact -->
        <section class="divider">
            <div class="container">
                <div class="row pt-30">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>{!! trans('label.location') !!}</strong>
                                        <p>{!! isset($contact->location)? $contact->location :'' !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>{!! trans('label.communications') !!}</strong>
                                        <p>{!! isset($contact->mobile1)? $contact->mobile1 :'' !!}</p>
                                        <p>{!! isset($contact->mobile2)? $contact->mobile2 :'' !!}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>{!! trans('label.email') !!}</strong>
                                        <p>{!! isset($contact->address)? $contact->address :'' !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep">
                                    <div class="media-body">
                                       <p>
                                        <ul class="styled-icons flat small list-inline ">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                                        </ul>
                                       </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="line-bottom mt-0 mb-20">{!! trans('label.contact_us') !!}</h3>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/s/studypress/v6.0/demo/includes/sendmail.php" method="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="form_name" class="form-control" type="text" placeholder="{!! trans('label.name') !!}" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="form_email" class="form-control required email" type="email" placeholder="{!! trans('label.email') !!}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="form_subject" class="form-control required" type="text" placeholder="{!! trans('label.subject') !!}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="form_phone" class="form-control" type="text" placeholder="{!! trans('label.phone') !!}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="{!! trans('label.message') !!}"></textarea>
                            </div>
                            <div class="form-group">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">{!! trans('label.submit') !!}</button>
                                <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">{!! trans('label.reset') !!}</button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate({
                                submitHandler: function(form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                    var form_btn_old_msg = form_btn.html();
                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                    $(form).ajaxSubmit({
                                        dataType:  'json',
                                        success: function(data) {
                                            if( data.status == 'true' ) {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn('slow');
                                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Google Map -->
        <section>
            <div class="container-fluid p-0">
                <div class="row">

                    <!-- Google Map HTML Codes --><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>
{{--    <div class="ct-site--map ct-u-backgroundGradient">--}}
{{--        <div class="container">--}}
{{--            <div class="ct-u-displayTableVertical text-capitalize">--}}
{{--                <div class="ct-u-displayTableCell">--}}
{{--                <span class="ct-u-textBig">--}}
{{--                    Wasiliana Nasi--}}
{{--                </span>--}}
{{--                </div>--}}
{{--                <div class="ct-u-displayTableCell text-right">--}}
{{--                <span class="ct-u-textNormal ct-u-textItalic">--}}
{{--                    <a href="index.html">Nyumbani</a> / <a href="#">Wasiliana Nasi</a>--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <section class="ct-u-backgroundLightGreen">--}}
{{--        <!-- Start Map -->--}}
{{--        <div class="container-fluid" style="margin-top:30px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d874.602359373166!2d39.25206318888896!3d-6.829535646622302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4a34a2b6c3af%3A0x586d3256c7115062!2sIlala+Bungoni!5e1!3m2!1sen!2stz!4v1509096721583"  width="100%" height="450" frameborder="0" style="border:0" ></iframe></div>--}}
{{--        <!-- End Map -->--}}
{{--        <div class="ct-u-paddingBoth100">--}}

{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom100 ct-u-textNormal">Acha Ujumbe wako</h4>--}}
{{--                        <div class="successMessage alert alert-success ct-u-marginTop20" style="display:none;">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                            Arafa imewasili Kikamilifu!.--}}
{{--                        </div>--}}
{{--                        <div class="errorMessage alert alert-danger ct-u-marginTop20" style="display:none;">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                            Kuna tatizo, Tafadhali Jaribu tena.--}}
{{--                        </div>--}}
{{--                        <form action="assets/form/send.php" method="POST" class="validateIt">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group ct-u-marginBottom30">--}}
{{--                                        <input id="contact_name" data-error-message="Name" placeholder="Name" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg" title="Name">--}}
{{--                                        <label for="contact_name" class="sr-only"></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group ct-u-marginBottom30">--}}
{{--                                        <input id="contact_email" data-error-message="Email" placeholder="Email" required="" name="field[]" type="email" class="form-control ct-input--type1 input-hg h5-email" title="Email">--}}
{{--                                        <label for="contact_email" class="sr-only"></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group  ct-u-marginBottom30">--}}
{{--                                <input id="contact_phone" placeholder="Subject" name="field[]" type="tel" class="form-control h5-phone ct-input--type1 input-hg" title="Phone">--}}
{{--                                <label for="contact_phone" class="sr-only"></label>--}}
{{--                            </div>--}}
{{--                            <div class="form-group  ct-u-marginBottom30">--}}
{{--                                <textarea id="contact_message" data-error-message="Message is required" placeholder="Your Message" class="form-control ct-input--type1" rows="6" name="field[]" required="" title="Message"></textarea>--}}
{{--                                <label for="contact_message" class="sr-only"></label>--}}
{{--                            </div>--}}

{{--                            <button type="submit" class="btn btn-primary btn-lg pull-right"><span>Tuma</span></button>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="ct-addressInformation">--}}
{{--                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Sanduku La Posta :</h4>--}}
{{--                            <p class="ct-u-marginBottom20"> {!! $contact->address !!},{!! $contact->location !!}--}}
{{--                            </p>--}}
{{--                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Makao Makuu :</h4>--}}
{{--                            <p class="ct-u-marginBottom20">Ex-Daya Building, Uhuru Street No. 23, Ilala Shariff Shamba--}}
{{--                            </p>--}}
{{--                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Number ya simu :</h4>--}}
{{--                            <span><a href="http://wa.me/255735717253" target = "blank"><i class="fa fa-whatsapp"></i>WhatsApp:</a> {!! $contact->mobile1 !!}</li>  </span>--}}
{{--                            <span><a href="http://wa.me/255783973428" target = "blank"><i class="fa fa-phone"></i>Nambari ya simu:</a>{!! $contact->mobile2 !!}</li>  </span>--}}
{{--                            <br>--}}
{{--                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Barua Pepe :</h4>--}}
{{--                            <span><a href="http://mailto:info@tyd.or.tz" target = "blank"><i class="fa fa-envelope-o"></i>Barua pepe :</a> {!! $contact->email !!}</span>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--    </section>--}}

@endsection
