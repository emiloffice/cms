@extends('layouts.master')
@section('title')
    <title>Multiverse • Ambassador Project</title>
    @endsection
@section('content')
    <div class="banner ambassador-banner">
        <div class="container">
            <div class="title">Ambassador Program</div>
        </div>
    </div>
    <div class="container">
        <div class="ambassador-area text-center">
            <h3>Thank you for joining the Ambassador Program! Here is your referral code: <span style="color: #d9534f;">{{ $code }}</span>!</h3>
            <a href="{{url('ambassador')}}" class="" role="button">Return to the Ambassador Program home page</a>
        </div>
    </div>

    @endsection
@section('other')
@endsection
@section('script')
<script>

</script>
@endsection