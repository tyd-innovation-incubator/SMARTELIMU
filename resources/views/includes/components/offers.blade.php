<ul>
    @if(alert()->getByUserByTypeCount(access()->user()->id, 210))
        @foreach (alert()->getByUserByTypeHeader(access()->user()->id, 210) as $offer)
            <li>
                <span class="title">{{ $offer->data }} {{ $offer->resource_link }}</span>
                <span class="message">{{ $offer->created_at->diffForHumans() }}</span>
            </li>
        @endforeach
    @else
        @lang('alert.system.alerts.empty_offer')
    @endif
</ul>
