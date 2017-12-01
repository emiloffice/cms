@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
        class="mobile"
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-news posts="{{$posts}}"></m-news>
    @else
        <news posts="{{$posts}}"></news>
    @endif
@endsection