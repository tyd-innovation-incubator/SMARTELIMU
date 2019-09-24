@extends('layouts.main')

@include('includes.datatable_assets')

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

            @include('profile.includes.left_sidebar')
        </div>

        <div class="col-md-9">
            {{--@foreach($user->candidates as $candidate)--}}
            {{--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 30px">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading" role="tab" id="headingOne">--}}
                            {{--<h4 class="panel-title">--}}
                                {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $candidate->id !!}" aria-expanded="true" aria-controls="collapseOne">--}}
                                    {{--<h4>Mwanafunzi {!! $candidate->id !!}</h4>--}}
                                {{--</a>--}}
                            {{--</h4>--}}
                        {{--</div>--}}
                        {{--<div id="collapse{!! $candidate->id !!}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                            {{--<div class="panel-body">--}}
                                {{--<div class="panel">--}}
                                    {{--<div class="panel-danger">--}}
                                        {{--<div class="container">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xs-12 col-sm-11 col-md-9" style="margin-top: 30px">--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class=" col-md-12 col-lg-12 ">--}}
                                                            {{--<table class="table table-user-information">--}}
                                                                {{--<tbody>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Full Name:</td>--}}
                                                                    {{--<td>{!! $candidate->first_name !!} {!! $candidate->last_name !!}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Class Name:</td>--}}
                                                                    {{--<td>{!! $candidate->className !!}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Gender</td>--}}
                                                                    {{--<td>{!! code_value()->find($candidate->gender)->values !!}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Nationality</td>--}}
                                                                    {{--<td> {!! $candidate->nationality !!} </td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Date of Birth</td>--}}
                                                                    {{--<td>{!! $candidate->DOB !!}</td>--}}
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
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
            {{--</div>--}}
                {{--@endforeach--}}

                    <div class="row col-md-12  custyle" style="margin-top: 30px">
                        <table class="table table-striped custab">
                            <thead>
                            <a href="{!! route('profile.create_candidate') !!}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Candidate</a>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Gender</th>

                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            @foreach($user->candidates as $candidate)

                            <tr>
                                <td>{!! $candidate->id !!}</td>
                                <td>{!! $candidate->first_name !!} {!! $candidate->last_name !!}</td>
                                <td>{!! $candidate->className !!}</td>
                                <td>{!! code_value()->find($candidate->gender)->values !!}</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="{!! route('profile.edit_candidate',$candidate->uuid) !!}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                                @endforeach

                        </table>
                    </div>

        </div>
    </div>





@endsection
@push('after-scripts')
<script  type="text/javascript">

    $('#contacts-table').DataTable({
        processing: false,
        serverSide: true,
        stateSave: false,
        searching: true,
        paging: true,
        info: true,
        stateSaveCallback: function (settings, data) {
            localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data));
        },
        stateLoadCallback: function (settings) {
            return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance));
        },
        {{--ajax: '{!! route('home') !!}',--}}
        type: 'get',
        columns: [
            {data: 'DT_RowIndex', name:'DT_RowIndex',orderable: false, searchable: false},
            {data: 'first_name', name: 'first_name', orderable: true, searchable: true},
            {data: 'last_name', name: 'last_name', orderable: false, searchable: false},
            {data: 'phone_number', name: 'phone_number', orderable: false, searchable: false},
            {data: 'gender', name: 'gender', orderable: false, searchable: false},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'actions', name: 'actions', orderable: false, searchable: false},
        ],


    });

</script>
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
