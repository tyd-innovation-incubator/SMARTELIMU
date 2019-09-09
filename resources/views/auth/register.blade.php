@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;background-color: whitesmoke;margin-bottom: 20px">
        <div class="col-md-6">
            <div class="card">
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                <div class="card-body" style="margin-top: 20px">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class=" col-form-label text-md-right">{{ __('label.first_name') }}</label>
                                    <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

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
                                    <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

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
                                    <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

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

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="email" class=" ol-form-label text-md-right">{{ __('label.gender') }}</label>

                                    {!! Form::select('gender', code_value()->getCodeForSelect(1), [], ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp', 'required']) !!}
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
                                <div class="form-group ">
                                    <label for="email" class=" ol-form-label text-md-right">{{ __('label.account_category') }}</label>

                                    {!! Form::select('account_category', code_value()->getCodeForSelect(2), [], ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp', 'required']) !!}
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('region', __("label.region"), ['class' => 'required_asterik']) !!}
                                    {!! Form::select('region',  code_value()->getRegionForSelect(), [], [ 'class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'region', 'aria-describedby' => '', 'required']) !!}
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group ">
                                    {{--{!! Form::label('city', __("label.city"), ['class' => 'required_asterik']) !!}--}}
                                    {{--{!! Form::text('province', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'province', 'aria-describedby' => '', 'required']) !!}--}}
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>







                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="text-center " style="margin-top: 10px">Registration Information</h3>
            <hr>
        </div>
    </div>
</div>
@endsection
@push('after-scripts')

<script>
    $(function() {
        $(".select2").select2();

        region_province_option('country', 'region', 'province', 'region_origin_div', 'province_origin_div');
        $("#country").on('change', function (e){
            region_province_option('country', 'region', 'province', 'region_origin_div', 'province_origin_div');
        });

        provider_type_option();
        $("#user_account_cv_id").on('change', function (e){
            provider_type_option();
        });

        /*Region / city input option depend on country selected*/
        function region_province_option(country_id, region_id, city_id, $region_div, $city_div) {
            var choice = $("#"+country_id).val();
            switch (choice) {
                case 'TZ':
                    enable_disable('enable', region_id);
                    enable_disable('disable', city_id);
                    $("#" + city_id).val(' ').change();
                    break;
                default:
                    $("#" + region_id).val('0').change();
                    enable_disable('disable', region_id);
                    enable_disable('enable', city_id);
            }
        }


        /*Enable / disable inputs*/
        function enable_disable(choice, element_id){
            switch (choice) {
                case 'enable':
                    $("#"+element_id).prop("disabled", false);
                    break;
                case 'disable':
                    $("#"+element_id).prop("disabled", true);
                    break;
            }
        }





        /*Provider option*/
        function provider_type_option()
        {
            var choice = $("#user_account_cv_id").val();
            if(choice == 2){
                $('#provider_type_div').show();
                $('#service_provider_type').prop('disabled', false);
            }else{
                $('#provider_type_div').hide();
                $('#service_provider_type').prop('disabled', true);
            }
        }


    });

    //        function showfield(name){
    //
    //            if(name=='Other')document.getElementById('div1').innerHTML='Other: <input type="text" name="other" />';
    //            else document.getElementById('div1').innerHTML='';
    //        }
</script>
@endpush
