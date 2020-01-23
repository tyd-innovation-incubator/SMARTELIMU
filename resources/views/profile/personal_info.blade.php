@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content" style="margin-top: 50px">
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

                                @if($user->category_cv_id == 3)
                                <li><a href="#tab17" data-toggle="tab">{!! trans('label.candidate_information') !!}</a></li>
                                @endif
                                <li><a href="#tab18" data-toggle="tab">{!! trans('label.course') !!}</a></li>
{{--                                <li><a href="#tab19" data-toggle="tab">Testing</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab16">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="volunteer-address">
                                                    <ul>
                                                        <li>
                                                            <div class="bg-light media border-bottom p-15 mb-20">
                                                                <div class="media-left">
                                                                    <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-0">{!! trans('label.personal_contacts') !!}:</h5>
                                                                    <p><span>{!! trans('label.name') !!}:</span> {!! $user->first_name !!} {!! $user->last_name !!}<br>
                                                                        <span>{!! trans('label.username') !!}:</span> {!! isset($user->userName) ? $user->userName :'' !!}<br>
                                                                        <span>{!! trans('label.gender') !!}:</span> {!! isset($user->gender)? code_value()->find($user->gender)->values :'' !!}<br>
                                                                        <span>{!! trans('label.account_category') !!}:</span> {!! isset($user->category_cv_id)? code_value()->find($user->category_cv_id)->values :'' !!}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="bg-light media border-bottom p-15 mb-20">
                                                                <div class="media-left">
                                                                    <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-0">{!! trans('label.address') !!}:</h5>
                                                                    <p>{!! isset($user->address)? $user->address :'' !!}<br>
                                                                        {!! isset($user->country)? $user->country->name:'' !!} <br> {!! isset($user->region) ? $user->region->name:'' !!}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="bg-light media border-bottom p-15">
                                                                <div class="media-left">
                                                                    <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-0">{!! trans('label.contacts') !!}:</h5>
                                                                    <p><span>{!! trans('label.phone') !!}:</span> {!! $user->phone !!}<br><span>{!! trans('label.email') !!}:</span> {!! $user->email !!}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                                <a href="{!! route('profile.edit_personal_info',$user->uuid) !!}" class="btn btn-default btn-theme-colored btn-circled btn-lg" style="margin-left: 350px;margin-top: 29px">{!! trans('buttons.general.crud.edit') !!}</a>

                            </div>
                            <div class="tab-pane fade" id="tab17">
                                <div class="row">
                                    <a class="btn btn-success pull-right" href="{!! route('profile.create_candidate') !!}">{!! trans('label.add_candidate') !!}</a>
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>{!! trans('label.first_name') !!}</th>
                                                <th>{!! trans('label.last_name') !!}</th>
                                                <th>{!! trans('label.year_of_study') !!}</th>
{{--                                                <th>{!!  !!}</th>--}}
                                                <th>{!! trans('label.action') !!}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->candidates as $candidate)
                                            <tr>
                                                <th scope="row">#1189</th>
                                                <td>{!! $candidate->first_name !!}</td>
                                                <td>{!! $candidate->last_name !!}</td>
                                                <td>{!! $candidate->year_of_study !!}</td>
                                                <td class="text-center"><a class='btn btn-info btn-xs' href="{!! route('profile.edit_candidate',$candidate->uuid) !!}"><span class="glyphicon glyphicon-edit"></span> {!! trans('buttons.general.crud.edit') !!}</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> {!! trans('buttons.general.crud.delete') !!}</a></td>
                                            </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab18">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{!! trans('label.package_name') !!}</th>
                                                <th>{!! trans('label.package_category') !!}</th>
                                                <th>{!! trans('label.price') !!}</th>
                                                <th>{!! trans('label.action') !!}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->packages as $package)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{!! $package->name !!}</td>
                                                <td>{!! $package->category !!}</td>
                                                <td>{!! $package->price !!}</td>
                                                <td><a class="btn btn-success btn-xs" href="{!! route('lessons.view',$package->uuid) !!}">{!! trans('label.view') !!}</a></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
