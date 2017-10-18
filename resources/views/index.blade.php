@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <Index></Index>
    @endif
@endsection