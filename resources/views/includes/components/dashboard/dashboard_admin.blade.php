<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header sidebar-custom">
        <div class="sidebar-title sidebar-custom">
            @lang("label.my_desktop")
        </div>
        <div class="sidebar-toggle d-none d-md-block sidebar-custom" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano sidebar-custom">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                {{--1--}}
                <div class="row" align="center">
                    <div class="col-md-12">
                        <a href="{!! route('admin.stakeholder.profile_system_user', access()->user()->uuid) !!}"><span class="badge badge-pill badge-success">&nbsp;</span>   {!! access()->user()->name !!}</a>

                    </div>
                </div>
                <hr class="hr-separator">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link nav-link-custom" href="{{ route('admin.index') }}">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                            <span class=""> @lang('menu.dashboard')</span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a class="nav-link nav-link-custom" href="{{ route('admin.task_monitor') }}">
                            <i class="fas fa-desktop"></i>
                            @if(access()->user()->pending_tasks > 0)
                                <span class="">  {!! trans('menu.task_monitor')!!} -   <label class="badge badge-info">{!! access()->user()->pending_tasks !!}</label></span>
                            @else
                                <span class="">  {!! trans('menu.task_monitor')!!}</span>
                            @endif
                            <span class=""> </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a href="{{ route('admin.information.index') }}" class="nav-link nav-link-custom">
                            <i class="fas fa-receipt" aria-hidden="true"></i>
                            <span class=""> @lang('menu.information.index') </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a href="{{ route('admin.business.index') }}" class="nav-link nav-link-custom">
                            <i class="fas fa-suitcase" aria-hidden="true"></i>
                            <span class=""> @lang('menu.business.index') </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a href="{{ route('admin.stakeholder.index') }}" class="nav-link nav-link-custom">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            <span class=""> @lang('menu.admin.stakeholder_centre.stakeholder') </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a href="{!! route('admin.service.index') !!}" class="nav-link nav-link-custom">
                            <i class="fas fa-bell" aria-hidden="true"></i>
                            <span class=""> @lang('menu.service.index') </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                    <li>
                        <a href="{{route('admin.system.index')}}" class="nav-link nav-link-custom">
                            <i class="fas fa-cogs" aria-hidden="true"></i>
                            <span class=""> @lang('menu.admin.system_module.index') </span>
                        </a>
                        <hr class="hr-separator">
                    </li>
                </ul>
            </nav>

        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>






