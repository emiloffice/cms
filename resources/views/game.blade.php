@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
        class="mobile"
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-game></m-game>
    @else
        <Game></Game>
    @endif
@endsection