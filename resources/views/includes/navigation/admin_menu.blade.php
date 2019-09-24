<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title" style="background-color:#a1650e; color: #010101;">
            Menu
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano has-scrollbar hovered" style="background-color:#a1650e;">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="">
                            <i class="fas fa-user-shield" aria-hidden="true"></i>
                            <span style="color: white"> @lang('label.dashboard')</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            <span style="color: white"> @lang('label.admin_menu.all_customers') </span>
                        </a>

                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            <span style="color: white"> @lang('label.admin_menu.administration') </span>
                        </a>

                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-list" aria-hidden="true"></i>
                            <span style="color: white"> @lang('label.admin_menu.manage_send_id') </span>
                        </a>

                    </li>

                    <li>
                        <a href="#" class="nav-link">
                            <i class="fas fa-bell" aria-hidden="true"></i>
                            <span style="color: white"> @lang('label.admin_menu.report') </span>
                        </a>

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


