@extends('layouts.app')
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