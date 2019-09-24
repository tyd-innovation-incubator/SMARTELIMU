<header class="header fixed has-top-menu">

    <div class="logo-container">
        <a href="{{ route('dashboard.home') }}" class="logo">
            <img src="{{ url("img/logo-nextsms.png") }}" style=" height: 47px; " alt="{{ config("app.name") }}" />
        </a>
    </div>

    <button class="btn header-btn-collapse-nav d-lg-none collapsed" data-toggle="collapse" data-target=".header-nav" aria-expanded="false" style="margin-top: 78px; background: orange">
        <i class="fas fa-bars"></i>
    </button>
    <!-- start: header nav company menu -->
    @Customer
    <div class="header-nav collapse">
        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">

            <nav>
                <ul class="nav nav-pill" id="mainNav">
                    <li {{--{{ setTopMenuActive('home') }}--}}>
                        <a class="nav-link" href="{!! route('dashboard.home') !!}" >
                            <i class="fas fa-home fa-fw" aria-hidden="true" ></i>
                            @lang('label.dashboard')
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Contacts
                        </a>
                        <ul class="dropdown-menu"  style="margin-left: 0px">
                            <li>
                                <a class="nav-link" href="{!! route('contact.index') !!}" style="color: black">Manage Contacts</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{!! route('group.index') !!}" style="color: black">Manage Groups</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{!! route('contact.import') !!}" style="color: black">Import Contacts</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            SMS
                        </a>
                        <ul class="dropdown-menu"  style="margin-left: 0px">
                            <li>
                                <a class="nav-link" href="{{ route('sms.compose') }}" style="color: black">{{ @trans('label.sms.send') }}</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ route('sms.template.index') }}" style="color: black">{{ @trans('label.sms.templates') }}</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('sms.draft.all') }}" style="color: black">{{ @trans('label.sms.draft') }}</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Payments
                        </a>
                        <ul class="dropdown-menu"  style="margin-left: 0px">
                            <li>
                                <a class="nav-link" href="{!! route('payment.recharge') !!}" style="color: black">Recharge</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{!! route('payment.history') !!}" style="color: black">History</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Report
                        </a>
                        <ul class="dropdown-menu"  style="margin-left: 0px">
                            <li>
                                {{--<a class="nav-link" href="#" style="color: black">Received SmS</a>--}}
                            </li>
                            {{--<li>--}}
                                {{--<a class="nav-link" href="#" style="color: black">Received  SmS Report</a>--}}
                            {{--</li>--}}
                            <li>
                                <a class="nav-link" href="{{ route('sms.sent') }}" style="color: black">History</a>
                            </li>
                            {{--<li>--}}
                                {{--<a class="nav-link" href="#" style="color: black">History Report</a>--}}
                            {{--</li>--}}

                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('profile.view') }}" >
                            {!! trans('label.my_profile') !!}
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    @endCustomer

    @Admin
    <div class="header-nav collapse" {{--style="margin-left: 100px"--}}>
        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">

            <nav>
                <ul class="nav nav-pill" id="mainNav">
                    <li {{ setTopMenuActive('admin/dashboard') }}>
                        <a class="nav-link" href="{!! route('admin.dashboard') !!}" >
                            <i class="fas fa-home fa-fw" aria-hidden="true" ></i>
                            @lang('label.dashboard')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{!! route('customers.all') !!}" >
                            <i class="fas fa-users fa-fw" aria-hidden="true" ></i>
                            @lang('label.customer.customers')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{!! route('admin.users.view') !!}" >
                            <i class="fas fa-users fa-fw" aria-hidden="true" ></i>
                            @lang('label.admin_menu.administration')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{!! route('sender.id.admin.approved') !!}" >
                            <i class="fas fa-paper-plane fa-fw" aria-hidden="true" ></i>
                            @lang('label.sms.sender_id')
                        </a>
                    </li>

                    {{--<li class="dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#">--}}
                            {{--Report--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li>--}}
                                {{--<a class="nav-link" href="#" style="color: black">Received SmS</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a class="nav-link" href="#" style="color: black">Received  SmS Report</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="nav-link" href="#" style="color: black">History</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a class="nav-link" href="#" style="color: black">History Report</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li data-toggle="dropdown">--}}
                        {{--<a class="nav-link" href="" >--}}
                            {{--Developer--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            </nav>

        </div>
    </div>
    @endAdmin
    <!-- start: search & user box -->

    <div class="header-right ">
        <ul class="notifications">
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="fas fa-flag-checkered"></i>
                    <span class="badge offers-badge"></span>
                </a>
                <div class="dropdown-menu notification-menu large">
                    <div class="notification-title">
                        <span class="float-right badge badge-default"></span>
                        @lang('label.business.offers')
                    </div>
                    <div class="content">
                        <div id="offers-list"></div>
                        <hr/>
                        <div class="text-right">
                            <a href="" class="view-more">@lang('label.view_all')</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="fas fa-flag-checkered"></i>
                    <span class="badge offers-badge"></span>
                </a>
                <div class="dropdown-menu notification-menu large">
                    <div class="notification-title">
                        <span class="float-right badge badge-default"></span>
                        @lang('label.business.offers')
                    </div>
                    <div class="content">
                        <div id="offers-list"></div>
                        <hr/>
                        <div class="text-right">
                            <a href="" class="view-more">@lang('label.view_all')</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <div class="profile-info" data-lock-name="{{ access()->user()->first_name }}" data-lock-email="{{ access()->user()->email }}">
                    <span class="name"></span>
                    @auth
                    <span class="name"> <span class="badge badge-pill badge-success">&nbsp;</span> {!!  access()->user()->fullname !!}</span>
                    @endauth
                </div>
                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('profile.view') }}"><i class="fas fa-user"></i> @lang('label.my_profile')</a>
                    </li>
                    <li>
                        {!! Form::open(['route' => 'logout', 'id' => 'logout-form']) !!}
                        {!! Form::close() !!}
                        <a role="menuitem" tabindex="-1" href="{{ route("logout") }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> @lang("label.logout") </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- end: search & user box -->

</header>