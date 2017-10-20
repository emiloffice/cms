@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <Show></Show>
    @endif
@endsection