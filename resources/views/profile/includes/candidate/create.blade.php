@extends('layouts.main')
@push('after-styles')
{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}
<style>
    .ui-datepicker-calendar {
        display: none;
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


    <div class="container " style="margin-top: 40px">
        <div class="row">
            <div class="col-md-3 ">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->


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
            <div class="col-md-6">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name" class=" col-form-label text-md-right">{{ __('label.first_name') }}</label>
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name" class=" col-form-label text-md-right">{{ __('label.last_name') }}</label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

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
                                <label for="class_name" class=" col-form-label text-md-right">{{ __('label.class_name') }}</label>
                                <input id="class_name" type="text" class="form-control @error('username') is-invalid @enderror" name="class_name" value="{{ old('class_name') }}" required autocomplete="class_name" autofocus>

                                @error('class_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="year_of_study" class=" ol-form-label text-md-right">{{ __('label.year_of_study') }}</label>

                                {!! Form::date('year_of_study',null , ['id'=>'datepicker', 'class' => 'form-control datepicker1','required','style' => 'background-color: white;']) !!}

                                @error('year_of_study')
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
                                <label for="date_of_birth" class=" col-form-label text-md-right">{{ __('label.date_of_birth') }}</label>
                                <input id="date_of_birth" type="date" class="form-control @error('phone') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="phone" autofocus>

                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="gender" class=" ol-form-label text-md-right">{{ __('label.gender') }}</label>

                                {!! Form::select('gender', code_value()->getCodeForSelect(1), [], ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'gender', 'aria-describedby' => 'countryHelp', 'required']) !!}
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
                                {!! Form::label('country', __("label.country"), ['class' => 'required_asterik']) !!}
                                {!! Form::select('country', code_value()->getCountryIdsForSelect(), [], ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp', 'required']) !!}
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">

                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ trans('label.register') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
@push('after-scripts')

<script>

    $(function() {
        $( "#datepicker" ).datepicker({dateFormat: 'yy'});
    });





</script>
@endpush
