@extends('layouts.main')
@push('after-styles')
{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}
<style>


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

        @if(count(access()->user()->candidates) > 0)

            @else
        <div class="alert alert-danger " style="margin-top: 30px;width: 60%;margin-left: 100px">
            <a href="{!! route('profile.create_candidate') !!}" class="btn btn-xs btn-danger pull-right">Sajili taarifa za mtoto</a>
            <strong>Umejisajili kama mzazi</strong>
        </div>

            @endif
    </div>


    <div class="container " style="margin-top: 40px">
        <div class="row">
            <div class="col-md-3 ">
                {{--<div class="profile-sidebar">--}}
                    {{--<!-- SIDEBAR USERPIC -->--}}
                    {{--<div class="profile-userpic">--}}
                        {{--<!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->--}}


                    {{--</div>--}}

                    {{--<!-- END SIDEBAR USER TITLE -->--}}
                    {{--<!-- SIDEBAR MENU -->--}}
                    {{--<div class="profile-usermenu">--}}
                        {{--<ul class="nav">--}}
                            {{--<li class="active">--}}
                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-home"></i>--}}
                                    {{--<span class="hidden-xs">@lang('label.personal_contacts')</span> </a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#candidate">--}}
                                    {{--<i class="glyphicon glyphicon-user"></i>--}}
                                    {{--<span class="hidden-xs">@lang('label.candidate_information')</span> </a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-ok"></i>--}}
                                    {{--<span class="hidden-xs">Orders </span></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-flag"></i>--}}
                                    {{--<span class="hidden-xs">My Wishlist </span></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-shopping-cart"></i>--}}
                                    {{--<span class="hidden-xs">Shopping Bag</span> </a>--}}

                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!-- END MENU -->--}}
                {{--</div>--}}
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Lorem ipsum</a></li>
                        <li class=""><a href="#tab2" data-toggle="tab">Dolor asit amet</a></li>
                        <li class=""><a href="#tab3" data-toggle="tab">Stet clita</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">


                <div class="tab-content">
                    <div class="tab-pane active text-style" id="tab1">
                        <p>
                        <div class="form_main col-md-6 col-sm-5 col-xs-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="POST" action="{{ route('update_user',$user) }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class=" col-form-label text-md-right">{{ __('label.first_name') }}</label>
                                                            <input id="name"  type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}"  autocomplete="first_name" autofocus>

                                                            @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class=" col-form-label text-md-right">{{ __('label.last_name') }}</label>
                                                            <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}"  autocomplete="last_name" autofocus>

                                                            @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class=" col-form-label text-md-right">{{ __('label.username') }}</label>
                                                            <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}"  autocomplete="username" autofocus>

                                                            @error('username')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="email" class=" ol-form-label text-md-right">{{ __('label.email') }}</label>

                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class=" col-form-label text-md-right">{{ __('label.phone') }}</label>
                                                            <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                                                            @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="gender" class=" ol-form-label text-md-right">{{ __('label.gender') }}</label>

                                                            {!! Form::select('gender', code_value()->getCodeForSelect(1), $user->gender, ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp',]) !!}
                                                            {{--<input id="email" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">--}}

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class=" col-form-label text-md-right">{{ __('label.address') }}</label>
                                                            <input id="name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address  }}"  autocomplete="address" autofocus>

                                                            @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="email" class=" ol-form-label text-md-right">{{ __('label.account_category') }}</label>

                                                            {!! Form::select('account_category', code_value()->getCodeForSelect(2), [], ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp',]) !!}
                                                            {{--<input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="account_category" value="{{ old('gender') }}" required autocomplete="account_category">--}}

                                                            @error('gender')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <h5><strong>**{!! trans('label.change_password') !!}**</strong></h5>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password" class=" col-form-label text-md-right">{{ trans('label.new_password') }}</label>

                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="password-confirm" class="col-form-label text-md-right">{{ trans('label.new_password_confirmation') }}</label>

                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                                        </div>
                                                    </div>
                                                </div>







                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ trans('buttons.general.crud.update') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        </p>

                        <hr>
                        <img src="http://placehold.it/350x250" class="img-rounded pull-right">
                    </div>
                    <div class="tab-pane text-style" id="tab2">
                        @foreach($user->candidates as $candidate)
                       <div class="row">
                           <div class="col-md-4">
                               {!! trans('label.first_name') !!}
                           </div>
                           <div class="col-md-8">
                               {!!$candidate->first_name !!}

                           </div>

                       </div>
                            <div class="row">
                                <div class="col-md-4">
                                    {!! trans('label.last_name') !!}
                                </div>
                                <div class="col-md-8">
                                    {!!$candidate->last_name !!}

                                </div>

                            </div>
                            @endforeach

                    </div>
                    {{--<div class="tab-pane text-style" id="tab3">--}}
                        {{--<h2>Stet clita</h2>--}}
                        {{--<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum--}}
                            {{--iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla--}}
                            {{--facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit--}}
                            {{--augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>--}}
                        {{--<hr>--}}
                        {{--<div class="col-xs-6 col-md-3">--}}
                            {{--<img src="http://placehold.it/150x150" class="img-rounded pull-right">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <ul class="nav nav-pills nav-stacked col-md-2">
            <li class="active"><a href="#tab_a" data-toggle="pill">Pill A</a></li>
            <li><a href="#tab_b" data-toggle="pill">Pill B</a></li>
            <li><a href="#tab_c" data-toggle="pill">Pill C</a></li>
            <li><a href="#tab_d" data-toggle="pill">Pill D</a></li>
        </ul>
        <div class="tab-content col-md-10">
            <div class="tab-pane " id="tab_a">
                <h4>Pane A</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="tab-pane" id="tab_b">
                <h4>Pane B</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="tab-pane" id="tab_c">
                <h4>Pane C</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
            <div class="tab-pane" id="tab_d">
                <h4>Pane D</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
        </div><!-- tab content -->
    </div><!-- end of container -->

    <div class="container">
        <div class="col-sm-2">

            <div><h2 class="add">Place for your add!</h2></div>
        </div>
        <!-- tab content -->



    </div>
@endsection
