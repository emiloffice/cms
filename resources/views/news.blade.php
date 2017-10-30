@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <news></news>
    @endif
@endsection