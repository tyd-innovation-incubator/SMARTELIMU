<ul>
    @if(alert()->getByUserByTypeCount(access()->user()->id, 211))
        @foreach (alert()->getByUserByTypeHeader(access()->user()->id, 211) as $tender)
            <li>
                <span class="title">{{ $tender->data }} {{ $tender->resource_link }}</span>
                <span class="message">{{ $tender->created_at->diffForHumans() }}</span>
            </li>
        @endforeach
    @else
        @lang('alert.system.alerts.empty_tender')
    @endif
</ul>
