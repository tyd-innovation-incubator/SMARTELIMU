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

            <div class="panel">
                <div class="panel-danger">

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
