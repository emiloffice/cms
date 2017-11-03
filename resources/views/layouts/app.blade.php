<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if ($agent->isMobile())
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0;">
    @else
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="//{{getenv('RESOURCE_PATH')}}{{ csrf_token() }}">

    <title>Multiverse Entertainment LLC</title>

    <!-- Styles -->
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}/css/animate.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//{{getenv('RESOURCE_PATH')}}/fonts/iconfont/iconfont.css">
    @yield('head-extend')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app" @yield('class-name')>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="//{{getenv('RESOURCE_PATH')}}{{ mix('/js/app.js') }}"></script>
    <script src="//{{getenv('RESOURCE_PATH')}}/fonts/iconfont/iconfont.js"></script>
    @yield('foot-extend')
</body>
</html>
