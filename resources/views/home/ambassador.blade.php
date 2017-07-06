@extends('layouts.master')
@section('title')
    <title>Multiverse • Ambassador Project</title>
    @endsection
@section('content')
    <div class="banner ambassador-banner">
        <div class="container">
            <div class="title">Ambassador Program</div>
            <div id="form-ambassador">
                <form action="{{url('ambassador')}}" method="post">
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
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ambassador-area">
            <p class="">TOP AMBASSADORS</p>
            <ol>
                <li>哈哈</li>
                <li>嘿嘿</li>
                <li>呵呵</li>
                <li>哒哒</li>
                <li>嘻嘻</li>
                <li>嘀嘀</li>
                <li>噹噹</li>
                <li>哔哔</li>
                <li>哩哩</li>
                <li>嘟嘟</li>
            </ol>
        </div>
    </div>

    @endsection
@section('other')
@endsection
@section('script')
<script>

</script>
@endsection