@extends('layouts.main', ['title' => __('label.service.payment.payment'), 'header' => __('label.service.payment.payment')])

@push('after-styles')
{{ Html::style(url('vendor/select2/css/select2.min.css')) }}
<style>

    .pheader{float:left; width:100%; text-align:center;font-size:20px; font-weight:800;
        padding:10px;border-bottom:1px solid #aaa; margin-bottom:10px;
    }

</style>
@endpush

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card">
                <div class="card-body">
                    <div id="loadImg" style="margin-left: 250px">
                        <div ><img src="https://i.gifer.com/4aZc.gif"></div>
                    </div>

                    <iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0" onload="document.getElementById('loadImg').style.display='none';">
                        {{--<p>Browser unable to load iFrame</p>--}}
                    </iframe>


                </div>
            </section>
            </section>
        </div>

    </div>

@endsection

@push('after-scripts')
<script>



    $(function () {

        //For the form select2
        $(".select2").select2();

        //for number check
        $('body').off('keydown', '.number').on('keydown', '.number', function(e) {
            number_only(e);

        });

        /* start : ensure only numbers are input on monetary boxes */
        function number_only(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        }



        /*FOR THE INPUT HIDE AND SHOW */
        //$(".transportation").hide();
        // $(".container_supplier").hide();
//      $('#smartwizard').smartWizard();


        deactivateServiceElements();
        services_option('payment_information', 'invoice_information','bank_information','card_information');
        $("#services").on('change', function (e){
            deactivateServiceElements();
            services_option('payment_information', 'invoice_information','bank_information','card_information');
        });
    });
    // check if service type is selected -> transport and container_supplier
    function services_option(payment_information, invoice_information,bank_information,card_information) {

        var choice = $("#"+payment_information).val();
        switch (choice) {
            case '7':
                $("#invoice_information").show();
                $(".invoice_information_input").prop("disabled", false);

                break;
            case '92':

                $("#bank_information").show();
                $(".bank_information_input").prop("disabled", false);
                break;
            case '101':
                $("#card_information").show();
                $(".card_information_input").prop("disabled", false);
                break;

            default:
                $("#" + invoice_information).hide();
                $("#" + bank_information).hide();
                $("#" + card_information).hide();

        }
    }

    function deactivateServiceElements(){
        $(".invoice_information_input").prop("disabled", true);
        $(".bank_information_input").prop("disabled", true);
        $(".card_information_input").prop("disabled", true);
    }

</script>



@endpush
