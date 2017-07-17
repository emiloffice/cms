@extends('layouts.master')
@section('title')
    <title>Multiverse • Ambassador Project</title>
    @endsection
@section('content')
    <div class="banner ambassador-banner">
        <div class="container">
            <div class="title">Ambassador Project</div>
        </div>
    </div>
    <div class="container">
        <div class="ambassador-area text-center">
            <h4>Hello {{$user->name}}, your ambassador score is:</h4>
            <h2>Score: {{ $user->ambassador_times }}</h2>
            <h4>keep it up!share your code <span style="color: #51a351">{{ $user->ambassador_code }}</span>!</h4>
            <a href="{{url('ambassador')}}" class="" role="button">Return to Ambassador Program home page</a>
        </div>
    </div>

    @endsection
@section('other')
@endsection
@section('script')
<script>

</script>
@endsection