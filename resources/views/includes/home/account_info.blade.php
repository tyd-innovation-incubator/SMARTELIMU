@if(\Illuminate\Support\Facades\Route::current()->getName() == 'dashboard.home')
<div class="row center">
    <div class="col-md-12 mb-1">
        <h2 class="text-dark mb-1 font-weight-light  mt-0">Tell Your  <strong>Customer</strong></h2>
        <p class="lead">Create one sms and Send to Many.</p>

        <a class="btn btn-3d btn-xl mt-1 mb-3" href="{!! route('resources.get_stated') !!}" style="background-color: #383f48; border-color: #383f48 #383f48 #22262b; color: #fff;">Get Started <i class="ml-4 fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
<section class="card">
    <div class="card">
        <div class="card-body">
            <header class="card-header card-header-custom"><h2 class="card-title" style="color: white" ><i class="fas fa-user">  </i> Account Informations </h2>
            </header>


            <ul class="simple-card-list mb-3">
                <li class="default">
                    {{--@if(access()->user()->contacts->count() <= 0)--}}
                        {{--<h3>0 <a href="{!! route('contact.add') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">@lang('label.contact.add_new')<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                        {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.contacts')</p>--}}

                    {{--@else--}}
                        <h3>{!! access()->user()->contacts->count() !!}</h3>
                        <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.contacts')</p>

                    {{--@endif--}}
                </li>
                <li class="">
                    {{--@if($transactions_differences < 0 )--}}
                        {{--<h3>0 <a href="{!! route('payment.recharge') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">Recharge<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                        {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.sms.title')</p>--}}
                    {{--@else--}}
                        <h3>{!! $transactions_differences !!}</h3>
                        <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.sms.title')</p>
                    {{--@endif--}}
                </li>
                <li class="">
                    {{--@if(access()->user()->groups->count() <= 0)--}}
                        {{--<h3>0 <a href="{!! route('group.index') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">@lang('label.contact.add_group')<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                        {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.groups')</p>--}}

                    {{--@else--}}
                        <h3>{!! access()->user()->groups->count() !!}</h3>
                        <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.groups')</p>

                    {{--@endif--}}

                </li>
            </ul>




        </div>
    </div>
</section>
@else
    <section class="card">
        <div class="card">
            <div class="card-body">
                <header class="card-header card-header-custom"><h2 class="card-title" style="color: white" ><i class="fas fa-user">  </i> Account Informations </h2>
                </header>


                <ul class="simple-card-list mb-3">
                    <li class="default">
                        {{--@if(access()->user()->contacts->count() <= 0)--}}
                            {{--<h3>0 <a href="{!! route('contact.add') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">@lang('label.contact.add_new')<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                            {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.contacts')</p>--}}

                        {{--@else--}}
                            <h3>{!! access()->user()->contacts->count() !!}</h3>
                            <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.contacts')</p>

                        {{--@endif--}}
                    </li>
                    <li class="">
                        {{--@if($transactions_differences < 0)--}}
                            {{--<h3>0 <a href="{!! route('payment.recharge') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">Recharge<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                            {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.sms.title')</p>--}}
                        {{--@else--}}
                            <h3>{!! $transactions_differences !!}</h3>
                            <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.sms.title')</p>
                        {{--@endif--}}
                    </li>
                    <li class="">
                        {{--@if(access()->user()->groups->count() <= 0)--}}
                            {{--<h3>0 <a href="{!! route('group.index') !!}" style="font-family: 'Droid Sans Japanese';font-size: 0.8em;margin-left: 50px">@lang('label.contact.add_group')<i class="ml-1 fas fa-long-arrow-alt-right"></i></a> </h3>--}}
                            {{--<p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.groups')</p>--}}

                        {{--@else--}}
                            <h3>{!! access()->user()->groups->count() !!}</h3>
                            <p  style="color: #0a0a0a;font-family: 'Droid Sans Japanese';font-size: 1.25em">@lang('label.groups')</p>

                        {{--@endif--}}

                    </li>
                </ul>
            </div>
        </div>
    </section>
    @endif