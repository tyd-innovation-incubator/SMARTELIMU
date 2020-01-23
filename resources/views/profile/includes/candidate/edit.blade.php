@extends('layouts.app')
@push('after-styles')
{!! Html::style(url('vendor/sweetalert/sweetalert.css')) !!}
<style>
    .ui-datepicker-calendar {
        display: none;
    }
</style>

@endpush
@section('content')


    <div class="container " style="margin-top: 10px">
        <div class="row">
            <div class="col-md-3" style="margin-left: 0px">

{{--                @include('profile.includes.left_sidebar')--}}
            </div>
            <div class="col-md-9" style="margin-top: 20px">

                <form method="POST" action="{{ route('profile.update_candidate',$candidate->uuid) }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="first_name" class=" col-form-label text-md-right">{{ __('label.first_name') }}</label>
                                <input id="first_name" type="text"  class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{!! $candidate->first_name !!}" required autocomplete="first_name" autofocus>

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
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{!! $candidate->last_name !!}" required autocomplete="last_name" autofocus>

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
                                <input id="class_name" type="text" class="form-control @error('username') is-invalid @enderror" name="class_name" value="{!! $candidate->class_name !!}" required autocomplete="class_name" autofocus>

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

                                {!! Form::date('year_of_study',$candidate->year_of_study , ['id'=>'datepicker', 'class' => 'form-control datepicker1','required','style' => 'background-color: white;']) !!}

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
                                <input id="date_of_birth" type="date" class="form-control @error('phone') is-invalid @enderror" name="date_of_birth" value="{!! $candidate->date_of_birth !!}" required autocomplete="phone" autofocus>

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

                                {!! Form::select('gender', code_value()->getCodeForSelect(1), $candidate->gender, ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'gender', 'aria-describedby' => 'countryHelp', 'required']) !!}
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
                                {!! Form::select('country', code_value()->getCountryIdsForSelect(), $candidate->nationality, ['class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country', 'aria-describedby' => 'countryHelp', 'required']) !!}
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
                            <a class="btn btn-default btn-lg mt-15" href="{!! route('profile.personal_info') !!}">{!! trans('buttons.general.cancel') !!}</a>
                            <button type="submit" class="btn btn-dark btn-lg mt-15">
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
