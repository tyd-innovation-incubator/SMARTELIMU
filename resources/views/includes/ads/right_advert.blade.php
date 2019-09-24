@php
    $ad_right_1 = ad()->getRandomPremiumTopBanner(201);
    $ad_right_2 = ad()->getRandomPremiumTopBanner(202);
    $ad_right_3 = ad()->getRandomPremiumTopBanner(203);
@endphp

<div class="text-center">
    <div class="row">
        <div class="col-md-12 banner-right-1">
            @if(isset($ad_right_1->id))
                <a @if(!empty($ad_right_1->url)) href='{{ $ad_right_1->url }}' target='_blank' @endif>
                    <img class="premium-right" src="{{ count($ad_right_1->adImageFileUrl($ad_right_1->adFirstImageFile()->pivot->id)) ?  url($ad_right_1->adImageFileUrl($ad_right_1->adFirstImageFile()->pivot->id)) : url('img/ads/ad_small.jpg') }}">
                </a>
            @else
                <a href="{{ route('news.search') }}">
                    <img src="{{ url('img/ads/right_1.gif') }}">
                </a>
            @endif
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12 banner-right-2">
            @if(isset($ad_right_2->id))
                <a @if(!empty($ad_right_2->url)) href='{{ $ad_right_2->url }}' target='_blank' @endif>
                    <img class="premium-right" src="{{ count($ad_right_2->adImageFileUrl($ad_right_2->adFirstImageFile()->pivot->id)) ?  url($ad_right_2->adImageFileUrl($ad_right_2->adFirstImageFile()->pivot->id)) : url('img/ads/ad_small.jpg') }}">
                </a>
            @else
                <a href="{{ route('feedback.index') }}">
                    <img src="{{ url('img/ads/right_2.gif') }}">
                </a>
            @endif
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12 banner-right-1-3">
            @if(isset($ad_right_3->id))
                <a @if(!empty($ad_right_3->url)) href='{{ $ad_right_3->url }}' target='_blank' @endif>
                    <img class="premium-right" src="{{ count($ad_right_3->adImageFileUrl($ad_right_3->adFirstImageFile()->pivot->id)) ?  url($ad_right_3->adImageFileUrl($ad_right_3->adFirstImageFile()->pivot->id)) : url('img/ads/ad_small.jpg') }}">
                </a>
            @else
                <a href="{{ route('commodity.index') }}">
                    <img src="{{ url('img/ads/right_3.gif') }}">
                </a>
            @endif
        </div>
    </div>
</div>

@push('after-scripts')
    <script>
        $(function() {

        });
    </script>
@endpush
