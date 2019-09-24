@php
    $ad_bottom = ad()->getRandomPremiumTopBanner(200);
@endphp

<section><br>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center banner-bottom">
            @if(isset($ad_bottom->id))
                <a @if(!empty($ad_bottom->url)) href='{{ $ad_bottom->url }}' target='_blank' @endif>
                    <img class="premium-bottom" src="{{ count($ad_bottom->adImageFileUrl($ad_bottom->adFirstImageFile()->pivot->id)) ?  url($ad_bottom->adImageFileUrl($ad_bottom->adFirstImageFile()->pivot->id)) : url('img/projects/project-4.jpg')}}">
                </a>
            @else
                <a href="{{ route('ad.index') }}">
                    <img src="{{ url('img/ads/ad.jpg') }}">
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
