@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
        class="mobile"
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-about></m-about>
    @else
        <About></About>
    @endif
@endsection