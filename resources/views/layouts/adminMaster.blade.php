<!DOCTYPE HTML>
<html>
<head>
    @include('layouts.adminMeta')
</head>
<body>
    @section('header')

    @show
    @section('menu')

    @show
    @section('content')
        This is content
    @show
    @include('layouts.adminFooter')
    @section('script')
        This is  script
    @show
</body>
</html>