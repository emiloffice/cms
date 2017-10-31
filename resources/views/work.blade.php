@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
    class="mobile"
    @else
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-work></m-work>
    @else
        <work></work>
    @endif
@endsection