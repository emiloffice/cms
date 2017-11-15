@extends('layouts.app')
@section('keywords')
    <meta name="keywords" content="{{$post->keyword}}">
    <meta name="description" content="{{$post->description}}">
    @endsection
@section('title',$post->title.' Multiverse Entertainment LLC  ')
@section('content')
    @if ($agent->isMobile())
    @else
        <Show posts="{{$post}}"></Show>
    @endif
@endsection
@section('foot-extend')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#post-content').html('{!! $post->content !!}')
        });
    </script>
@endsection