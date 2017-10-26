<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="//{{getenv('RESOURCE_PATH')}}{{ csrf_token() }}">

    <title>Multiverse Entertainment LLC</title>

    <!-- Styles -->
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconfont/iconfont.css') }}">
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
    <script src="/fonts/iconfont/iconfont.js"></script>
</body>
</html>
