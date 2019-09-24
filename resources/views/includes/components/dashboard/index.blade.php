{{--@if(access()->user()->user_account_type == 1)--}}
    {{--@include("includes/components/dashboard/dashboard_admin")--}}
{{--@elseif(access()->user()->user_account_type == 6)--}}
    {{--@include("includes/components/dashboard/dashboard_association")--}}
{{--@else--}}
    @include("includes/components/dashboard/dashboard_user")
{{--@endif--}}
