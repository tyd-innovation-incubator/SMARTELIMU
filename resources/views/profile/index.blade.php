@extends('layouts.main')
@push('after-styles')
{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}
<style></style>

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


    <div class="container " style="margin-top: 40px">
        <div class="row">
            <div class="col-md-3 ">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->


                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <span class="hidden-xs">Hareesh Vudari</span>
                        </div>
                        <div class="profile-usertitle-job">
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span class="hidden-xs">@lang('label.personal_contacts')</span> </a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-user"></i>--}}
                                    {{--<span class="hidden-xs">Delivery Address</span> </a>--}}
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

                            </li>

                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">

                <div class="form_main col-md-6 col-sm-5 col-xs-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="heading"><strong>@lang('label.personal_contacts') </strong>  <span></span></h4>
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
            </div>

        </div>
    </div>
@endsection
