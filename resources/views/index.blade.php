@extends('layouts.app')
@section('head-extend')
    <link rel="stylesheet" type="text/css" href="{{url('fullpage/jquery.fullPage.css')}}" />
    @endsection
@section('class-name')
    class="fullpage"
    @endsection
@section('content')
    @if ($agent->isMobile())
        <Index></Index>
    @else
        <Index></Index>
    @endif
@endsection
@section('foot-extend')
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="/js/jquery-ui.js"></script>

    <script type="text/javascript" src="{{ url('fullpage/jquery.fullPage.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                menu: '#menu',
                scrollingSpeed: 1000
            });

        });
    </script>
    @endsection