@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
        class="mobile"
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-contact></m-contact>
    @else
        <Contact></Contact>
    @endif
@endsection