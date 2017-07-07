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
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <div class="panel panel-default">
                <div class="panel-heading">TOP AMBASSADORS</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Emil Wong</td>
                            <td>85835839@qq.com</td>
                            <td>98ECDB</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Emil Wong</td>
                            <td>85835839@qq.com</td>
                            <td>98ECDB</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Emil Wong</td>
                            <td>85835839@qq.com</td>
                            <td>98ECDB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ambassador-search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search your email...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
                </div><!-- /input-group -->
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