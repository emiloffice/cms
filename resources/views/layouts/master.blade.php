<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>资讯列表</title>
</head>
<body>
    @include('layouts.nav')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            @yield('content')
            @include('layouts.sidebar')
        </div>
    </div>
    @include('layouts.errors')
    @include('layouts.footer')
</body>
</html>