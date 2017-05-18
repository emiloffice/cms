<!DOCTYPE html>
<html lang="zh-cn">
<head>
    @include('layouts.meta')
</head>
<body>
    @include('layouts.nav')
    @include('layouts.header')
    @section('content')

    @show
    @include('layouts.errors')
    @include('layouts.footer')
</body>
</html>