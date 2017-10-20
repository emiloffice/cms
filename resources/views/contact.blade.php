@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <Contact></Contact>
    @endif
@endsection