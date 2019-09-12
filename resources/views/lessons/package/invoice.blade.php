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
                    {{--<span class="ct-u-textNormal ct-u-textItalic">--}}
                    {{--<a href="course-single.html">Nyumbani</a> / <a href="course-single2.html">Darasa linalofata</a>--}}
                    {{--</span>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-8 ">

                    </div>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Package Summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                {{--<div class="invoice-title">--}}
                                    {{--<h2>Invoice</h2>--}}
                                    {{--<h3 class=""> {!! truncateString($package->uuid,6) !!}</h3>--}}
                                {{--</div>--}}
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            {!! access()->user()->first_name !!}  {!! access()->user()->first_name !!}<br>
                                            {!! access()->user()->email !!}
                                        </address>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            <br>

                                        </address>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            {!! short_date_format($invoice->created_at) !!}<br><br>
                                        </address>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <td><strong>Medication</strong></td>
                                            <td class="text-center"><strong>Quantity</strong></td>
                                            <td class="text-right"><strong>Price</strong></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                        <tr>
                                            <td>{!! $package->name !!}</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">{!! number_0_format($package->price) !!} Tsh</td>
                                        </tr>

                                        <tr>
                                            <td class="no-line"></td>
                                            <td class="no-line text-center"><strong>Total</strong></td>
                                            <td class="no-line text-right">{!! number_0_format($package->price) !!} Tsh</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                @if(!$invoice->ispaid)
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <section class="card card-primary mb-4">

                                                        <div class="card-body">
                                                            <div class="col-md-3">

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                {!! Form::hidden('today_date', getTodayDate(), []) !!}
                                                                {{--1--}}
                                                                <div class="form-group">
                                                                    {!! Form::label('mobile_network', trans("label.choose_payment_aggrigator"), ['class' => 'required_asterik']) !!}

                                                                    {!! Form::select('gender', code_value()->getCodeForSelect(8),null, ['class' => 'select2 form-control','required','id' => 'province', 'placeholder'=>trans('label.select'),'aria-describedby' => '']) !!}
                                                                    {!! $errors->first('mobile_network', '<span class="badge badge-danger">:message</span>') !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="element-form">
                                                <div class="form-group pull-center">
                                                    {{--{!! link_to_route('payment.history',trans('buttons.general.cancel'),[],['id'=> 'cancel', 'class' => 'btn btn-primary cancel_button', ]) !!}--}}
                                                    {!! Form::button(trans('label.submit'), ['class' => 'btn btn-primary', 'type'=>'submit', 'style' => 'border-radius: 5px;']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
