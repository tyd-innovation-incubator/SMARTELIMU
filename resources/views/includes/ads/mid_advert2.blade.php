@php
    $ad_mid = ad()->getRandomPremiumTopBanner(199);
@endphp

<section><br>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center banner-mid">
            @if(isset($ad_mid->id))
                <a @if(!empty($ad_mid->url)) href='{{ $ad_mid->url }}' target='_blank' @endif>
                    <img class="premium-mid" src="{{ count($ad_mid->adImageFileUrl($ad_mid->adFirstImageFile()->pivot->id)) ?  url($ad_mid->adImageFileUrl($ad_mid->adFirstImageFile()->pivot->id)) : url('img/projects/project-4.jpg')}}">
                </a>
            @else
                <a href="{{ route('forum.index') }}">
                    <img class="premium-mid" src="{{ url('img/ads/default_mid.gif') }}">
                </a>
            @endif
        </div>
    </div><br>
</section>


@push('after-scripts')
    <script>
        $(function() {

        });
    </script>
@endpush
