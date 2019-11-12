@extends('layouts.app', ['title' => __("label.home"), 'header' => __("label.registered")])

@push('after-styles-end')
    <style>

    </style>
@endpush

@section('content')

    <div class="row" style="margin-top: 30px;background-color: whitesmoke;margin-bottom: 20px">
        <div class="col-md-2">

        </div>
        <div class="col-md-6">

                    {!! Form::open(['route' => ["auth.account.sms_confirm",$user->uuid],'method'=>'get', 'autocomplete' => 'off', 'class' => 'needs-validation', 'novalidate']) !!}
                    @csrf

                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('token', trans("label.confirmation_code")) !!}
                                    {!! Form::text('token', null, ['class' => 'form-control create', 'autocomplete' => 'off', 'id' => 'email', 'aria-describedby' => 'emailHelp', 'required']) !!}
                                    {{--<small id="emailHelp" class="form-text text-muted">{{ trans('label.confirmation_helper') }}</small>--}}
                                    {!! $errors->first('token', '<span class="badge badge-danger">:message</span>') !!}
                                </div>
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="12">

                                <div class="table-responsive" style="margin-left: 230px;margin-top: 20px">
                                    <button type="submit" class="btn btn-primary">@lang("label.submit")</button>
                                    <a href="{!! route('auth.account.confirm.resend',$user->uuid) !!}" style="margin-left: 30px;margin-top: 20px">@lang('label.resend_email')</a>
                                </div>
                            </div>
                        </div>
                    </form>

        </div>

    </div>

@endsection

@push('after-scripts')

@endpush
