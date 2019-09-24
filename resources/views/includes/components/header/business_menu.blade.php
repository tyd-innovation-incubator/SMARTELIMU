
{{--Business Menu link - List item--}}

<li class="dropdown {{ Active::checkUriPattern('/') }}">
    <a class="nav-link dropdown-toggle" href="#">
        @lang("menu.business.index")
    </a>
    <ul class="dropdown-menu">
                    @lang('label.find') & @lang('label.search')
                    <hr class="dotted short">
                    <li>
                        <a class="nav-link" href="{!! route('tender.index') !!}">
                            @lang("menu.search.available_cargoes")
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{!! route('offer.index',code_value()->find(7)->name) !!}">
                            @lang("menu.search.available_transports")
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{!! route('offer.index',code_value()->find(9)->name) !!}">
                            @lang("menu.search.available_warehouses")
                        </a>
                    </li>
        <li>
            <a class="nav-link" href="{!! route('parking.index')!!}">
                @lang("menu.search.available_parking")
            </a>
        </li>

    </ul>
</li>