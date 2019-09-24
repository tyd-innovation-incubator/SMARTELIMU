
        {{--<!DOCTYPE HTML>--}}

{{--<html>--}}
{{--<head>--}}
    {{--<script>--}}
        {{--window.onload = function () {--}}

            {{--var chart = new CanvasJS.Chart("chartContainer",--}}
                    {{--{--}}
                        {{--title:{--}}
                            {{--text: "SMS Traffic"--}}
                        {{--},--}}
                        {{--data: [--}}
                            {{--{--}}
                                {{--type: "column",--}}
                                {{--dataPoints: --}}
                            {{--}--}}
                        {{--]--}}
                    {{--});--}}

            {{--chart.render();--}}
        {{--}--}}
    {{--</script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="chartContainer" style="height: 300px; width: 100%;">--}}
{{--</div>--}}
{{--{!! Html::script(url('js/canvasjs.js')) !!}--}}
{{--</body>--}}
{{--</html>--}}
                <!DOCTYPE html>
        <html lang="">
        <head>
            <meta charset="utf-8">
            <title>Chart with VueJS</title>

        </head>
        <body>
        <div id="app" class="card-body">
            {!! $sms_traffic->container() !!}
        </div>

        {{--<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>--}}
        {!! $sms_traffic->script() !!}
        </body>
        </html>