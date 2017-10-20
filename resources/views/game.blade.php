@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <Game></Game>
    @endif
@endsection