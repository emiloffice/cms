@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <About></About>
    @endif
@endsection