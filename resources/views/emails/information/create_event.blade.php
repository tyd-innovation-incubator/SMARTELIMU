{{--<body style="margin:0px; background: #f8f8f8;">--}}
<div width="100%" style="margin:0px; background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
    <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
            <tbody>
            <tr>
                <td style="vertical-align: top; padding-bottom:30px;" align="center">
                    <a href="{{ config("env.app.client_web") }}" target="_blank">
                        <img src="http://notification.nextbyte.co.tz/public/images/nflip_logo.jpg" alt="NFLIP Logo" style="border:none;width: 300px;">
                        <br>
                        {{--<img src="./basic_files/eliteadmin-text-dark.png" alt="Eliteadmin Responsive web app kit" style="border:none">--}}
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
        <div style="padding: 40px; background: #fff;">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td><b>{{ $name }},</b>
                        <p>@lang("strings.email.event_created.line_1")&nbsp;&nbsp;&nbsp;<br><strong>@lang('label.title')</strong>:{!! $event->title !!}</p>
                        </p>

                        <a href="{!! route('event.show',$event) !!}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #32CD32; border-radius: 60px; text-decoration:none;"> @lang("buttons.email.read_event") </a>

                        <p>@lang("strings.email.tender_application.line_2")&nbsp;&nbsp;<a href="{{ route("event.show",$event) }}">{{ route("event.show",$event) }}</a></p>
                        <b>- @lang("label.thanks") ( {{ config("env.app.name") }} )</b> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
            <p> Powered by NextByte ICT Solutions <br>
                <a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a>
            </p>
        </div>
    </div>
</div>
{{--</body>--}}
