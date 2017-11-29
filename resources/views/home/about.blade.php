@extends('layouts.master')
@section('title')
    <title>About</title>
    @endsection
@section('content')
    <div class="banner about-banner text-center">
        <div class="container">
            <p class="title">Multiverse</p>
            <p class="subtitle">VR Content <span>Developers</span> & <span>Publishers</span></p>
            <p class=""><span>Multiverse is a professional game publisher and virtual reality content and game creation studio, aiming to bridge the gap between the Eastern and Western game and VR markets.</span></p>
        </div>
    </div>
    <div class="company container-fluid text-center tab-area">
        <p class="title ">OUR COMPANY</p>
        <ul id="company-content" class="tab-content container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <li class="active">
                We understand the value that goes into getting creative minds together, but also understand how difficult it can be to get your games published. We work to provide assistance for game developers so that they can create and build extraordinary games.
            </li>
            <li>
                We base our value on three key elements. We work creatively alongside brilliant minds. We work efficiently and diligently while keeping quality content our main focus and priority. And to enjoy the work we are doing.
            </li>
            <li>
                MULTIVERSE was founded in March of 2016. Through our time in the industry we have published wildly successful games, while also worked to build our truly talented team. Through hard work, sweat, and yes, tears, we finally are on the verge of releasing a well-crafted new game that is quite ground breaking. We are proud of the team we have that is currently working on this said game, which we call “Seeking Dawn”.
            </li>
        </ul>
        <ul id="btn-area" class="tab-nav container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <li class="active">our vision</li>
            <li>our value</li>
            <li>our story</li>

        </ul>
    </div>
    <div class="press text-center">
        <p class="title ">PRESS</p>
        <div id="posts-area" class="container">
            <div class="btn-area hidden-xs" id="prev-btn"><i class="fa fa-chevron-left"></i></div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="{{Config::get('constants.CDN_HOST')}}img/press1.png" alt=""></div>
                    <div class="des">“One of the most visually compelling experiences”</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="{{Config::get('constants.CDN_HOST')}}img/press2.png" alt=""></div>
                    <div class="des">“One of the most anticipated games of the year”</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="{{Config::get('constants.CDN_HOST')}}img/press3.png" alt=""></div>
                    <div class="des">“One of the most breathtaking experiences we have ever seen”</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="btn-area hidden-xs" id="next-btn"><i class="fa fa-chevron-right"></i></div>
        </div>
    </div>
    <div class="about-partners">
        <div class="container">
            <p class="title text-center">OUR PARTNERS</p>
            <ul>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/partners1.png') }}" alt="vive"></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/press3.png') }}" alt=""></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/partners-steam.png') }}" alt=""></li>
            </ul>

            {{--<div class="join-area">
                <div class="col-lg-8 col-lg-offset-2">
                    <span class="col-lg-6">Want to join our team</span> <a href="#" class="">Search Jobs</a>
                </div>
            </div>--}}
        </div>
    </div>
@section('script')
<script>
    var tabs = $('.tab-area');
    var uls= $('.tab-content');
    var ulv= $('.tab-nav');
    ulv.children('li').click(function () {
        var _li = $(this).index()
        ulv.children('li').removeClass('active');
        uls.children('li').removeClass('active');
        $(this).addClass('active');
        uls.children().eq(_li).addClass('active');
        console.log(this)
    })
</script>
@endsection