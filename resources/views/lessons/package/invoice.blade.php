@extends('layouts.app')

@section('content')



    <div class="main-content">

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row mt-30">
                        {!! Form::open(['route' => ['payment.payment', $invoice->uuid], 'class' => '', 'novalidate','enctype'=>'multipart/form-data']) !!}

                            <div class="col-md-12">
                                <div class="container pb-60">
                                    <div class="section-title mb-10">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1"> <span class="text-theme-color-2 font-weight-400">{!! trans('label.course') !!}</span></h2>
                                            </div>
                                        </div>
                                    </div>                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                    <thead>
                                    <tr>
                                        <th>{!! trans('label.package_name') !!}</th>
                                        <th>{!! trans('label.package_category') !!}</th>
                                        <th>{!! trans('label.date') !!}</th>
                                        <th>{!! trans('label.total') !!}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="{!! route('lessons.view',$invoice->package->uuid) !!}"><img alt="member" src="{!! url('http://admin.smartelimu.ac.tz/img/packages/'.$invoice->package->image.'') !!}"> {!! $invoice->package->name !!}</a></td>
                                        <td>{!! $invoice->package->category !!}</td>
                                        <td>{!! short_date_format($invoice->created_at) !!}</td>

                                        <td><span class="amount">{!! $invoice->amount !!} TSH</span></td>
                                    </tr>

                                    <tr>
                                        <td>{!! trans('label.total') !!}</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>

                                        <td>{!! $invoice->amount !!} TSH</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <h3>{!! trans('label.payment_information') !!}</h3>
                                <div class="payment-method">
                                    {{--{!! Form::open(['route' => ['payment.payment', $invoice->uuid], 'class' => '', 'novalidate','enctype'=>'multipart/form-data']) !!}--}}

                                @foreach(code_value()->getAllByCode(8) as $payment_method)
                                        {{--{!! dd($payment_method->id) !!}--}}
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="{!! $payment_method->id !!}" checked>
                                            {!! $payment_method->values !!} </label>
                                        {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                    </div>
                                    @endforeach
                                    {{--<div class="radio">--}}
                                        {{--<label>--}}
                                            {{--<input type="radio" name="optionsRadios" value="option2" checked>--}}
                                            {{--Cheque Payment </label>--}}
                                        {{--<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="radio">--}}
                                        {{--<label>--}}
                                            {{--<input type="radio" name="optionsRadios" value="option3" checked>--}}
                                            {{--PayPal Payment </label>--}}
                                        {{--<p>Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                    {{--</div>--}}

                                </div>
                            </div>
                            <div class="col-md-12">

                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4">--}}

                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="element-form">--}}
                                                {{--<div class="form-group pull-center">--}}
                                                    {{--{!! link_to_route('payment.history',trans('buttons.general.cancel'),[],['id'=> 'cancel', 'class' => 'btn btn-primary cancel_button', ]) !!}--}}
                                                    {{--{!! Form::button(trans('label.submit'), ['class' => 'btn btn-primary', 'type'=>'submit', 'style' => 'border-radius: 5px;']) !!}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                {!! Form::button(trans('label.submit'), ['class' => 'btn btn-primary', 'type'=>'submit', 'style' => 'border-radius: 5px;']) !!}

                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- end main-content -->

    </div>
@endsection
