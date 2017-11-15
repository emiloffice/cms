@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <Show></Show>
    @endif
@endsection
@section('foot-extend')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#content').html('{!! $post->content !!}')
        });
    </script>
@endsection