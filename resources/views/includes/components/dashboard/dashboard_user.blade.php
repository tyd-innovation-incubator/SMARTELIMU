<div class="row">
    <div class="col-sm-4 col-md-12 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">
        <span href="#" class="list-group-item active" style="background-color: #a1650e;border-color: #a1650e">
            <header class="card-header card-header-custom">
                        <h2 class="card-title" style="color: white" >QUICK LINKS</h2>
                    </header>

            <span class="pull-right" id="slide-submenu">
                {{--<i class="fa fa-times"></i>--}}
            </span>
        </span>
            <a href="{{ route('sms.compose') }}" class="list-group-item" >
                <i class="fa fa-share-square"></i> @lang('label.sms.send')
            </a>
            <a href="{!! route('contact.add') !!}" class="list-group-item">
                <i class="fa fa-user"></i> @lang('label.contact.add_new')
            </a>
            <a href="{!! route('group.index') !!}" class="list-group-item">
                <i class="fa fa-users"></i> @lang('label.contact.manage_group')
            </a>
            <a href="{!! route('payment.recharge') !!}" class="list-group-item">
                <i class="fa fa-money-check-alt"></i> @lang('label.payment.recharge_sms')
            </a>
            <a href="{!! route('profile.sender.id') !!}" class="list-group-item">
                <i class="fa fa-id-card-alt"></i> @lang('label.customer.request_sender_id')
            </a>

            {{--<a href="#" class="list-group-item">--}}
                {{--<i class="fa fa-envelope"></i> Lorem ipsum--}}
            {{--</a>--}}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-4 col-md-12 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">

            <p class="ml-7" style="margin-top: 40px">
                {!! access()->user()->customer->change_customer_account !!}
            </p>
            {{--<a href="#" class="list-group-item">--}}
            {{--<i class="fa fa-envelope"></i> Lorem ipsum--}}
            {{--</a>--}}
        </div>
    </div>
</div>