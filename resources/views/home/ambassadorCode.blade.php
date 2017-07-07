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
            <h3>Remember, your ambassador code is <span style="color: #d9534f;">{{ $code }}</span>!</h3>
            <a href="{{url('ambassador')}}" class="" role="button">go back to ambassador project</a>
        </div>
    </div>

    @endsection
@section('other')
@endsection
@section('script')
<script>

</script>
@endsection