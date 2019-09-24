<div class="row ">
    <div class="col-xl-4">
        <a href="{{ route('sms.sent') }}" class="dashboard-link" style="text-decoration: none">
            <section class="card card-featured-left card-featured-quaternary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-quaternary">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">{{ trans('label.sms.sent_sms') }}</h4>
                                <div class="info">
                                    <strong class="amount">{!! $countSentSms !!}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-uppercase btn btn-xs btn-quaternary" href="{{ route('sms.sent') }}">{{ trans('buttons.general.view') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </a>
    </div>
    <div class="col-xl-4">
        <a href="{{ route('sms.scheduled') }}" class="dashboard-link" style="text-decoration: none">
            <section class="card card-featured-left card-featured-quaternary mb-4">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-quaternary">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">{{ trans('label.sms.scheduled') }}</h4>
                                <div class="info">
                                    <strong class="amount">{!! $countScheduledSms !!}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-uppercase btn btn-xs btn-quaternary" href="{!! route('sms.scheduled') !!}">{{ trans('buttons.general.view') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </a>
    </div>
    <div class="col-xl-4">
        <a href="{{ route('sms.failed') }}" class="dashboard-link" style="text-decoration: none">
            <section class="card card-featured-left card-featured-quaternary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-quaternary">
                                <i class="fas fa-exclamation"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">{{ trans('label.sms.failed') }}</h4>
                                <div class="info">
                                    <strong class="amount">{{ $countFailedSms }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-uppercase btn btn-xs btn-quaternary" href="{!! route('sms.failed') !!}">{{ trans('buttons.general.view') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </a>
    </div>
</div>
