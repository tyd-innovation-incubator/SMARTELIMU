<div class="list-group" style="margin-top: 30px">

{{--    <a href="#" class="list-group-item active"><i class="fa fa-key"></i> <span>Profile Ya akaunti</span></a>--}}
{{--    <a href="{!! route('profile.personal_info') !!}" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Taarifa Binafsi</span></a>--}}
{{--    @if(access()->user()->category_cv_id == 2)--}}

{{--        <a href="{!! route('profile.candidate_info') !!}" class="list-group-item"><i class="fa fa-question-circle"></i> <span>Taarifa za Mwanafunzi</span></a>--}}
{{--    @endif--}}
{{--    --}}{{--<a href="#" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Package Invoices</span></a>--}}
{{--    --}}{{--<a href="#" class="list-group-item"><i class="fa fa-book"></i> <span>QuickStart Overview</span></a>--}}
    {{--<a href="#" class="list-group-item"><i class="fa fa-compass"></i> <span>Documentation</span></a>--}}
    <div class="col-md-12">
        <div class="vertical-tab">
            <ul class="nav nav-tabs">
                <li class="active"><a href="{!! route('profile.personal_info') !!}" data-toggle="tab">{!! trans('label.personal_contacts') !!}</a></li>
                @if(access()->user()->category_cv_id == 2)

                <li><a href="" data-toggle="tab">{!! trans('label.candidate_information') !!}</a></li>
                @endif
                                            <li><a href="#tab18" data-toggle="tab">{!! trans('label.course') !!}</a></li>
                                                <li><a href="#tab19" data-toggle="tab">Testing</a></li>
            </ul>
        </div>
    </div>

</div>
