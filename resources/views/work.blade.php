@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
    @else
        <work></work>
    @endif
@endsection