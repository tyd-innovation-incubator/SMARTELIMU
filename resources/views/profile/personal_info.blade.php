@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" style="margin-top: 50px">



        {{--<!-- Section: Doctor Details -->--}}
        {{--<section class="">--}}
            {{--<div class="container">--}}
                {{--<div class="section-content">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sx-12 col-sm-4 col-md-4">--}}
                            {{--<div class="doctor-thumb">--}}
                                {{--<img src="themes/images/about/profile1.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="info p-20 bg-black-333">--}}
                                {{--<h4 class="text-uppercase text-white">Jacob Smith</h4>--}}
                                {{--<p class="text-gray-silver">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus.</p>--}}
                                {{--<ul class="list angle-double-right m-0">--}}
                                    {{--<li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br> smith@yourdomain.com</li>--}}
                                    {{--<li class="text-gray-silver"><strong class="text-gray-lighter">Web</strong><br> www.yourdomain.com</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                {{--</ul>--}}
                                {{--<a class="btn btn-info btn-flat mt-10 mb-sm-30" href="#">Edit Profile</a>--}}
                                {{--<a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#">Logout</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 col-md-8">--}}
                            {{--<div>--}}
                                {{--<!-- Nav tabs -->--}}
                                {{--<ul class="nav nav-tabs" role="tablist">--}}
                                    {{--<li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders <span class="badge">4</span></a></li>--}}
                                    {{--<li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Free Orders <span class="badge">3</span></a></li>--}}
                                    {{--<li role="presentation"><a href="#bookmarks" aria-controls="bookmarks" role="tab" data-toggle="tab" class="font-15 text-uppercase">Bookmarks <span class="badge">5</span></a></li>--}}
                                {{--</ul>--}}

                                {{--<!-- Tab panes -->--}}
                                {{--<div class="tab-content">--}}
                                    {{--<div role="tabpanel" class="tab-pane active" id="orders">--}}
                                        {{--<div class="table-responsive">--}}
                                            {{--<table class="table table-hover">--}}
                                                {{--<thead>--}}
                                                {{--<tr>--}}
                                                    {{--<th>Order ID</th>--}}
                                                    {{--<th>Date</th>--}}
                                                    {{--<th>Payment</th>--}}
                                                    {{--<th>Total</th>--}}
                                                    {{--<th></th>--}}
                                                {{--</tr>--}}
                                                {{--</thead>--}}
                                                {{--<tbody>--}}
                                                {{--<tr>--}}
                                                    {{--<th scope="row">#1264</th>--}}
                                                    {{--<td>24/07/2016</td>--}}
                                                    {{--<td>PayPal</td>--}}
                                                    {{--<td>$127.50</td>--}}
                                                    {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th scope="row">#1264</th>--}}
                                                    {{--<td>24/07/2016</td>--}}
                                                    {{--<td>PayPal</td>--}}
                                                    {{--<td>$127.50</td>--}}
                                                    {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th scope="row">#1264</th>--}}
                                                    {{--<td>24/07/2016</td>--}}
                                                    {{--<td>PayPal</td>--}}
                                                    {{--<td>$127.50</td>--}}
                                                    {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th scope="row">#1264</th>--}}
                                                    {{--<td>24/07/2016</td>--}}
                                                    {{--<td>PayPal</td>--}}
                                                    {{--<td>$127.50</td>--}}
                                                    {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                                {{--</tr>--}}
                                                {{--</tbody>--}}
                                            {{--</table>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div role="tabpanel" class="tab-pane" id="free-orders">--}}
                                        {{--<table class="table table-hover">--}}
                                            {{--<thead>--}}
                                            {{--<tr>--}}
                                                {{--<th>Order ID</th>--}}
                                                {{--<th>Date</th>--}}
                                                {{--<th>Payment</th>--}}
                                                {{--<th>Total</th>--}}
                                                {{--<th></th>--}}
                                            {{--</tr>--}}
                                            {{--</thead>--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row">#1189</th>--}}
                                                {{--<td>24/07/2016</td>--}}
                                                {{--<td>PayPal</td>--}}
                                                {{--<td>$127.50</td>--}}
                                                {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row">#1189</th>--}}
                                                {{--<td>24/07/2016</td>--}}
                                                {{--<td>PayPal</td>--}}
                                                {{--<td>$127.50</td>--}}
                                                {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row">#1189</th>--}}
                                                {{--<td>24/07/2016</td>--}}
                                                {{--<td>PayPal</td>--}}
                                                {{--<td>$127.50</td>--}}
                                                {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row">#1189</th>--}}
                                                {{--<td>24/07/2016</td>--}}
                                                {{--<td>PayPal</td>--}}
                                                {{--<td>$127.50</td>--}}
                                                {{--<td><a class="btn btn-success btn-xs" href="#">View Order</a></td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                    {{--<div role="tabpanel" class="tab-pane" id="bookmarks">--}}
                                        {{--<table class="table">--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row"><img src="http://placehold.it/100x50" alt=""></th>--}}
                                                {{--<td><h4>Web Development Course</h3></h4>--}}
                                                {{--<td><h4>$127.50</h3></h4>--}}
                                                {{--<td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row"><img src="http://placehold.it/100x50" alt=""></th>--}}
                                                {{--<td><h4>Software Development Course</h3></h4>--}}
                                                {{--<td><h4>$127.50</h3></h4>--}}
                                                {{--<td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row"><img src="http://placehold.it/100x50" alt=""></th>--}}
                                                {{--<td><h4>App Development Course</h3></h4>--}}
                                                {{--<td><h4>$127.50</h3></h4>--}}
                                                {{--<td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th scope="row"><img src="http://placehold.it/100x50" alt=""></th>--}}
                                                {{--<td><h4>Photoshop Course</h3></h4>--}}
                                                {{--<td><h4>$127.50</h3></h4>--}}
                                                {{--<td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}



        <section>
            <div class="container pt-20 pb-20">
                {{--<div class="esc-heading lr-line left-heading">--}}
                    {{--<h4>Vertical Tabs</h4>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="vertical-tab">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab16" data-toggle="tab">{!! trans('label.personal_contacts') !!}</a></li>
                                <li><a href="#tab17" data-toggle="tab">{!! trans('label.candidate_information') !!}</a></li>
                                <li><a href="#tab18" data-toggle="tab">Development</a></li>
                                <li><a href="#tab19" data-toggle="tab">Testing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab16">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <div>
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders <span class="badge">4</span></a></li>
                                                <li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Free Orders <span class="badge">3</span></a></li>
                                                <li role="presentation"><a href="#bookmarks" aria-controls="bookmarks" role="tab" data-toggle="tab" class="font-15 text-uppercase">Bookmarks <span class="badge">5</span></a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="orders">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Order ID</th>
                                                                <th>Date</th>
                                                                <th>Payment</th>
                                                                <th>Total</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">#1264</th>
                                                                <td>24/07/2016</td>
                                                                <td>PayPal</td>
                                                                <td>$127.50</td>
                                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">#1264</th>
                                                                <td>24/07/2016</td>
                                                                <td>PayPal</td>
                                                                <td>$127.50</td>
                                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">#1264</th>
                                                                <td>24/07/2016</td>
                                                                <td>PayPal</td>
                                                                <td>$127.50</td>
                                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">#1264</th>
                                                                <td>24/07/2016</td>
                                                                <td>PayPal</td>
                                                                <td>$127.50</td>
                                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="free-orders">
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Date</th>
                                                            <th>Payment</th>
                                                            <th>Total</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">#1189</th>
                                                            <td>24/07/2016</td>
                                                            <td>PayPal</td>
                                                            <td>$127.50</td>
                                                            <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#1189</th>
                                                            <td>24/07/2016</td>
                                                            <td>PayPal</td>
                                                            <td>$127.50</td>
                                                            <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#1189</th>
                                                            <td>24/07/2016</td>
                                                            <td>PayPal</td>
                                                            <td>$127.50</td>
                                                            <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#1189</th>
                                                            <td>24/07/2016</td>
                                                            <td>PayPal</td>
                                                            <td>$127.50</td>
                                                            <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="bookmarks">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                                                            <td><h4>Web Development Course</h3></h4>
                                                            <td><h4>$127.50</h3></h4>
                                                            <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                                                            <td><h4>Software Development Course</h3></h4>
                                                            <td><h4>$127.50</h3></h4>
                                                            <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                                                            <td><h4>App Development Course</h3></h4>
                                                            <td><h4>$127.50</h3></h4>
                                                            <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                                                            <td><h4>Photoshop Course</h3></h4>
                                                            <td><h4>$127.50</h3></h4>
                                                            <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab17">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Payment</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">#1189</th>
                                                <td>24/07/2016</td>
                                                <td>PayPal</td>
                                                <td>$127.50</td>
                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#1189</th>
                                                <td>24/07/2016</td>
                                                <td>PayPal</td>
                                                <td>$127.50</td>
                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#1189</th>
                                                <td>24/07/2016</td>
                                                <td>PayPal</td>
                                                <td>$127.50</td>
                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#1189</th>
                                                <td>24/07/2016</td>
                                                <td>PayPal</td>
                                                <td>$127.50</td>
                                                <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab18">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="pull-left flip pr-20" width="300" src="http://placehold.it/155x90" alt="">
                                        <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab19">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="pull-left flip pr-20" width="300" src="http://placehold.it/155x90" alt="">
                                        <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

    </div>
                    </div>
            </div>

        </section>
</div>
@endsection






{{--@extends('layouts.app')--}}
{{--@push('after-styles')--}}
{{--{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}--}}


{{--@endpush--}}
{{--@section('content')--}}

    {{--<div class="ct-site--map ct-u-backgroundGradient">--}}
        {{--<div class="container">--}}
            {{--<div class="ct-u-displayTableVertical text-capitalize">--}}
                {{--<div class="ct-u-displayTableCell">--}}
                {{--<span class="ct-u-textBig">--}}
                {{--Taarifa za mtumiaji--}}
                {{--</span>--}}

                {{--</div>--}}
                {{--<div class="ct-u-displayTableCell text-right">--}}
                {{--<span class="ct-u-textNormal ct-u-textItalic">--}}
                    {{--<a href="userdashboard.html">Nyumbani</a>/<a href="user-profile">Ijayo</a>--}}
                {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}



    {{--<div class="container">--}}

        {{--@if(access()->user()->category_cv_id == 2)--}}
            {{--@if(count(access()->user()->candidates) > 0)--}}

            {{--@else--}}
                {{--<div class="alert alert-danger " style="margin-top: 30px;width: 60%;margin-left: 100px">--}}
                    {{--<a href="{!! route('profile.create_candidate') !!}" class="btn btn-xs btn-danger pull-right">Sajili taarifa za mtoto</a>--}}
                    {{--<strong>Umejisajili kama mzazi</strong>--}}
                {{--</div>--}}

            {{--@endif--}}
        {{--@endif--}}
    {{--</div>--}}


    {{--<div class="row">--}}
        {{--<div class="col-md-2" style="margin-left: 40px">--}}
            {{--<div class="list-group" style="margin-top: 30px">--}}

                {{--@include('profile.includes.left_sidebar')--}}


            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-9">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12 col-sm-11 col-md-10" style="margin-top: 30px">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="row">--}}
                                        {{--<fieldset class="col-md-11 " style="margin-top: 0px;margin-left: 30px">--}}
                                            {{--<legend>Personal information:</legend>--}}

                                            {{--<div class="panel panel-default">--}}
                                                {{--<div class="panel-body">--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--{!! trans('label.first_name') !!} :   <strong>{!! $user->first_name !!} </strong> <br>--}}
                                                            {{--{!! trans('label.email') !!} :  <strong>{!! $user->email !!}</strong>              <br>--}}
                                                            {{--{!! trans('label.gender') !!}:  <strong>{!!  isset($user->gender)? code_value()->find($user->gender)->values :'' !!}</strong>        <br>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6 ">--}}
                                                            {{--{!! trans('label.last_name') !!} : <strong>{!! $user->last_name !!} </strong><br>--}}
                                                            {{--{!! trans('label.phone') !!} : <strong>{!! $user->phone !!}</strong><br>--}}
                                                            {{--{!! trans('label.account_type') !!} :<strong>{!! isset($user->category_cv_id)? code_value()->find($user->category_cv_id)->values :'' !!}</strong> <br>--}}
                                                        {{--</div>--}}


                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<a href="{!! route('profile.edit_personal_info') !!}" style="margin-left: 620px;margin-top: 30px">Edit <i class="fas fa-edit" ></i></a>--}}
                                        {{--</fieldset>--}}
                                    {{--</div>--}}
                                    {{--<div class=" col-md-12 col-lg-12 ">--}}
                                        {{--<table class="table table-user-information">--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<td>Full Name:</td>--}}
                                                {{--<td>{!! $user->first_name !!} {!! $user->last_name !!}</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Username:</td>--}}
                                                {{--<td>{!! $user->username !!}</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Date of Birth</td>--}}
                                                {{--<td>01/24/1988</td>--}}
                                            {{--</tr>--}}

                                            {{--<tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Gender</td>--}}
                                                {{--<td>{!! count($user->gender)? code_value()->find($user->gender)->values :''!!}</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Home Address</td>--}}
                                                {{--<td>{!! count($user->address)? $user->address :'' !!}  {!! count($user->country)? $user->country->name:'' !!}  {!! count($user->region) ? $user->region->name:'' !!}</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Email</td>--}}
                                                {{--<td><a href="mailto:info@support.com">{!! $user->email !!}</a></td>--}}
                                            {{--</tr>--}}
                                            {{--<td>Phone Number</td>--}}
                                            {{--<td>{!! $user->phone !!}--}}
                                            {{--</td>--}}

                                            {{--</tr>--}}

                                            {{--</tbody>--}}
                                        {{--</table>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

{{--@endsection--}}
{{--@push('after-scripts')--}}
{{--<script>--}}
    {{--$(document).ready(function() {--}}


        {{--$('.list-group-item').click(function(e) {--}}
            {{--e.preventDefault();--}}
            {{--$('.list-group-item').removeClass('active');--}}
            {{--$(this).addClass('active');--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

{{--@endpush--}}
