@extends('layouts.app')
@section('class-name')
    @if ($agent->isMobile())
        class="mobile"
    @endif
@endsection
@section('content')
    @if ($agent->isMobile())
        <m-job></m-job>
    @else
        <Job></Job>
    @endif
@endsection