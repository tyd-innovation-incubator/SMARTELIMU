@extends('layouts.main')
@push('after-styles')
{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}
<style>
    fieldset
    {
        border: 1px solid #ddd !important;
        margin: 0;
        min-width: 0;
        padding: 5px;
        position: relative;
        border-radius:4px;
        background-color:#FFF;
        padding-left:10px!important;
    }
    legend
    {
        font-size:14px;
        font-weight: bold;
        margin-bottom: 0px;
        margin-right: 0px;
        min-width: 5%;
        width:auto;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 2px 10px 2px 10px;
        background-color: #ffffff;
    }
</style>


@endpush
@section('content')

    <div class="ct-site--map ct-u-backgroundGradient">
        <div class="container">
            <div class="ct-u-displayTableVertical text-capitalize">
                <div class="ct-u-displayTableCell">
                <span class="ct-u-textBig">
                Taarifa za mtumiaji
                </span>

                </div>
                <div class="ct-u-displayTableCell text-right">
                <span class="ct-u-textNormal ct-u-textItalic">
                    <a href="userdashboard.html">Nyumbani</a>/<a href="user-profile">Ijayo</a>
                </span>
                </div>
            </div>


        </div>
    </div>



    <div class="container">

        @if(access()->user()->category_cv_id == 2)
            @if(count(access()->user()->candidates) > 0)

            @else
                <div class="alert alert-danger " style="margin-top: 30px;width: 60%;margin-left: 100px">
                    <a href="{!! route('profile.create_candidate') !!}" class="btn btn-xs btn-danger pull-right">Sajili taarifa za mtoto</a>
                    <strong>Umejisajili kama mzazi</strong>
                </div>

            @endif
        @endif
    </div>


    <div class="row">
        <div class="col-md-2" style="margin-left: 40px">
            <div class="list-group" style="margin-top: 30px">

                @include('profile.includes.left_sidebar')


            </div>
        </div>

        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-11 col-md-10" style="margin-top: 30px">
                                <div class="row">
                                    <div class="row">
                                        <fieldset class="col-md-11 " style="margin-top: 0px;margin-left: 30px">
                                            <legend>Personal information:</legend>

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            {!! trans('label.first_name') !!} :   <strong>{!! $user->first_name !!} </strong> <br>
                                                            {!! trans('label.email') !!} :  <strong>{!! $user->email !!}</strong>              <br>
                                                            {!! trans('label.gender') !!}:  <strong>{!!  isset($user->gender)? code_value()->find($user->gender)->values :'' !!}</strong>        <br>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            {!! trans('label.last_name') !!} : <strong>{!! $user->last_name !!} </strong><br>
                                                            {!! trans('label.phone') !!} : <strong>{!! $user->phone !!}</strong><br>
                                                            {!! trans('label.account_type') !!} :<strong>{!! isset($user->category_cv_id)? code_value()->find($user->category_cv_id)->values :'' !!}</strong> <br>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                            {{--<a href="{!! route('profile.edit_personal_info') !!}" style="margin-left: 620px;margin-top: 30px">Edit <i class="fas fa-edit" ></i></a>--}}
                                        </fieldset>
                                    </div>
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
                                </div>
                            </div>

                </div>
            </div>
    </div>
    </div>

@endsection
@push('after-scripts')
<script>
    $(document).ready(function() {


        $('.list-group-item').click(function(e) {
            e.preventDefault();
            $('.list-group-item').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

@endpush
