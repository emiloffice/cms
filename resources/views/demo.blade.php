@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <example></example>
    @endif
@endsection