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
                        @if(access()->user()->isself_deactivated == 0)
                            <a href="{!! route('stakeholder.contact_person.profile') !!}"><span class="badge badge-pill badge-success">&nbsp;</span> {!! access()->user()->name !!}</a>
                        @else
                            <a href="{!! route('stakeholder.contact_person.profile') !!}"><span class="badge badge-pill badge-warning">&nbsp;</span> {!! access()->user()->name  !!}</a> - {!! __('label.stakeholder.account_not_active') !!}
                        @endif

                    </div>
                </div>
                <hr class="hr-separator">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link nav-link-custom" href="{{ route('stakeholder.contact_person.profile') }}">
                            <i class="fas fa-user-shield" aria-hidden="true"></i>
                            <span class=""> @lang('label.my_profile')</span>
                        </a>
                        <hr class="hr-separator">
                    </li>

                    <li>
                        <a class="nav-link nav-link-custom" href="{{ route('newsletter.index') }}">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span class="">  {!! __('label.system.newsletter.subscription')!!}</span>
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






