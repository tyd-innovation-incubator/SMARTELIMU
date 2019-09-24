{{--Section 1 / row 1 Quick access to NFLIP services--}}
@push('after-styles')
    {{ Html::style(url('vendor/animate/animate.css')) }}
    {{ Html::style(url('vendor/hover/hover.css')) }}
    <style>

    </style>
@endpush
<section class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                @include('includes.home.start.right')
            </div>
            <div class="col-md-6">
                @include('includes.home.start.centre')
            </div>
            <div class="col-md-3">
                @include('includes.home.start.left')
            </div>
        </div>
    </div>
</section>
