<ul>
    @if(alert()->getByUserByTypeCount(access()->user()->id, 209))
        @foreach (alert()->getByUserByTypeHeader(access()->user()->id, 209) as $alert)
            <li>
                <span class="title">{{ $alert->data }} {{ $alert->resource_link }}</span>
                <span class="message">{{ $alert->created_at->diffForHumans() }}</span>
            </li>
        @endforeach
    @else
        @lang('alert.system.alerts.empty_alert')
    @endif
</ul>
