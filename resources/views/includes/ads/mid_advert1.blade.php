@php
    $ad_top = ad()->getRandomPremiumTopBanner(198);
@endphp

<section>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center banner-top">

            @if(isset($ad_top->id))
                <a @if(!empty($ad_top->url)) href='{{ $ad_top->url }}' target='_blank' @endif>
                    <img class="premium-top" src="{{ count($ad_top->adImageFileUrl($ad_top->adFirstImageFile()->pivot->id)) ?  url($ad_top->adImageFileUrl($ad_top->adFirstImageFile()->pivot->id)) : url('img/projects/project-4.jpg')}}">
                </a>
            @else
                <a href="{{ route('stakeholder.company.search', 'LSTPT') }}">
                    <img class="premium-top"  src="{{ url('img/ads/default_top.gif') }}">
                </a>
            @endif
        </div>
    </div>
    <br>
</section>


@push('after-scripts')
    <script>
        $(function () {

        });
    </script>
@endpush
