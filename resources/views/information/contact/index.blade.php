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
                    Wasiliana Nasi
                </span>
                </div>
                <div class="ct-u-displayTableCell text-right">
                <span class="ct-u-textNormal ct-u-textItalic">
                    <a href="index.html">Nyumbani</a> / <a href="#">Wasiliana Nasi</a>
                </span>
                </div>
            </div>
        </div>
    </div>
    <section class="ct-u-backgroundLightGreen">
        <!-- Start Map -->
        <div class="container-fluid" style="margin-top:30px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d874.602359373166!2d39.25206318888896!3d-6.829535646622302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4a34a2b6c3af%3A0x586d3256c7115062!2sIlala+Bungoni!5e1!3m2!1sen!2stz!4v1509096721583"  width="100%" height="450" frameborder="0" style="border:0" ></iframe></div>
        <!-- End Map -->
        <div class="ct-u-paddingBoth100">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom100 ct-u-textNormal">Acha Ujumbe wako</h4>
                        <div class="successMessage alert alert-success ct-u-marginTop20" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Arafa imewasili Kikamilifu!.
                        </div>
                        <div class="errorMessage alert alert-danger ct-u-marginTop20" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Kuna tatizo, Tafadhali Jaribu tena.
                        </div>
                        <form action="assets/form/send.php" method="POST" class="validateIt">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group ct-u-marginBottom30">
                                        <input id="contact_name" data-error-message="Name" placeholder="Name" type="text" required="" name="field[]" class="form-control ct-input--type1 input-hg" title="Name">
                                        <label for="contact_name" class="sr-only"></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group ct-u-marginBottom30">
                                        <input id="contact_email" data-error-message="Email" placeholder="Email" required="" name="field[]" type="email" class="form-control ct-input--type1 input-hg h5-email" title="Email">
                                        <label for="contact_email" class="sr-only"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  ct-u-marginBottom30">
                                <input id="contact_phone" placeholder="Subject" name="field[]" type="tel" class="form-control h5-phone ct-input--type1 input-hg" title="Phone">
                                <label for="contact_phone" class="sr-only"></label>
                            </div>
                            <div class="form-group  ct-u-marginBottom30">
                                <textarea id="contact_message" data-error-message="Message is required" placeholder="Your Message" class="form-control ct-input--type1" rows="6" name="field[]" required="" title="Message"></textarea>
                                <label for="contact_message" class="sr-only"></label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg pull-right"><span>Tuma</span></button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="ct-addressInformation">
                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Sanduku La Posta :</h4>
                            <p class="ct-u-marginBottom20"> {!! $contact->address !!},{!! $contact->location !!}
                            </p>
                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Makao Makuu :</h4>
                            <p class="ct-u-marginBottom20">Ex-Daya Building, Uhuru Street No. 23, Ilala Shariff Shamba
                            </p>
                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Number ya simu :</h4>
                            <span><a href="http://wa.me/255735717253" target = "blank"><i class="fa fa-whatsapp"></i>WhatsApp:</a> {!! $contact->mobile1 !!}</li>  </span>
                            <span><a href="http://wa.me/255783973428" target = "blank"><i class="fa fa-phone"></i>Nambari ya simu:</a>{!! $contact->mobile2 !!}</li>  </span>
                            <br>
                            <h4 class="text-uppercase ct-fw-700 ct-u-marginBottom20 ct-u-textNormal">Barua Pepe :</h4>
                            <span><a href="http://mailto:info@tyd.or.tz" target = "blank"><i class="fa fa-envelope-o"></i>Barua pepe :</a> {!! $contact->email !!}</span>

                        </div>
                    </div>
                </div>
            </div>

    </section>

@endsection
