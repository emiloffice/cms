@extends('layouts.master')
@section('title')
    <title>Multiverse • Ambassador Project</title>
    @endsection
@section('content')
    <div class="banner ambassador-banner">
        <div class="container">
            <div class="title">Ambassador Program</div>
            <div id="form-ambassador">
                <form action="#" method="post">
                    <div class="input-list">
                        <p>Name</p>
                        <label for="name"></label>
                        <input type="text" name="name">
                    </div>
                    <div class="input-list">
                        <p>Email</p>
                        <label for="email"></label>
                        <input type="email" name="email">
                    </div>
                    <div class="input-list">
                        <p>Referral Code</p>
                        <label for="code"></label>
                        <input type="text" name="code">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
@section('other')
@endsection
@section('script')
<script>

</script>
@endsection