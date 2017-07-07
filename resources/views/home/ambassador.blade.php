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
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <button type="submit">SUBMIT</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="ambassador-area">
            <div class="panel panel-default">
                <div class="panel-heading">TOP AMBASSADORS</div>
                @if($abs == null)
                    <p class="text-center">We need you join in this ambassador project！</p>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>code</th>
                            <th>times</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abs as $k=>$ab)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$ab->name}}</td>
                                <td>{{$ab->email}}</td>
                                <td>{{$ab->ambassador_code}}</td>
                                <td>{{$ab->ambassador_times}}</td>
                            </tr>



                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
            <div class="ambassador-search">
                <form action="{{url('ambassador/search')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search your email..." name="search">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                    </div><!-- /input-group -->
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