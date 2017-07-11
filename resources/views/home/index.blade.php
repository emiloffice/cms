@extends('layouts.master')
@section('title')
<title>Multiverse Entertainment</title>
@endsection
@section('content')
    <div id="banner" class="container-fluid" style="padding: 0px!important;">
        <video  preload="auto" autoplay  width="100%" height="auto" id="banner_video" poster="https://s3-us-west-2.amazonaws.com/img/SeekingDawn_Banner.jpg"  muted="true">
            <source src="https://s3-us-west-2.amazonaws.com/multiverseinc/SeekingDawnAlphaTrailerV1.mp4">
        </video>
        <div id="banner_shadow"  class="hidden-sm hidden-xs"></div>
        <div id="banner_des" class="hidden-sm hidden-xs">
            <img id="video_title" src="{{Config::get('constants.CDN_HOST')}}img/SeekingDawn_logo.png">
            <p id="video_despriction">
                Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" filled with unknown dangers, interesting environments, and breathtaking visuals.
            </p>
            <a id="status" href="/seekingdawn">
                LEARN MORE
            </a>
        </div>
    </div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p>
            Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" filled with unknown dangers, interesting environments, and breathtaking visuals.
        </p>
        <a href="/seekingdawn" class="text-align-center" style="display: block;text-align: center;">
            LEARN MORE
        </a>
    </div>
    {{--<div class="creators container">
        <div class="thumb col-lg-6 col-md-6 col-md-6 col-sm-12"><img src="{{Config::get('constants.CDN_HOST')}}img/thumb2.jpg" alt=""></div>
        <div class="col-lg-6">
            <div class="subtitle">Multiverse</div>
            <div class="title">THE CREATORS</div>
            <p class="des">We are hardcore gamers, and we wanted a VR game with depth, requires thinking,
                and contains hundreds of hours of addictive gameplay.
                Seeking Dawn will be a VR game of the largest scale, and is being painstaking crafted to perfection.</p>
            <a href="#" class="link-href">LEARN MORE</a>
        </div>
    </div>--}}
    <div class="creators">
        <div class="content col-sm-12 col-md-6 col-md-offset-6">
            <div class="name">Multiverse</div>
            <div class="title">Founders</div>
            <div class="des">
                <p>Built from the ground up and consisting of team members who came from triple A game studios such as Disney and Riot Games.
                </p>
                <p>As developers we wanted to develop a VR game with depth that requires a unique approach to solving puzzles and that would contain hundreds of hours of replay value. We are building one of the largest VR games available and understand what it means to have a community built around our game and this is exactly the type of development process we are instilling into Seeking Dawn. This will be one of the largest VR games available, and is being painstakingly crafted to perfection.             </div>
                </p>
            <a class="contact" href="http://www.multiverseinc.com/contact">CONTACT</a>
        </div>

    </div>
    <!--dev blog-->
    <div class="dev-blog container-fluid hidden">
        <div class="container">
            <div class="title-part">
                <p class="subtitle">Blog</p>
                <p class="title">THE DEVELOPERS BLOG</p>
                <p class="des">We will continue to update the blog, welcome enthusiasts and we interact</p>
            </div>
            <div class="blog-area container">
                @foreach($posts as $post)
                <div class="blog">
                    <div class="thumb"><img src="{{Config::get('constants.CDN_HOST')}}img/thumb2.jpg" alt=""></div>
                    <p class="title">{{ $post->title }}</p>
                    <p class="create_at">{{ $post->created_at }}</p>
                    <p class="des">{{ $post->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="published_game text-algin">
        <div class="title font-size-32 text-center">
            OUR GAMES
        </div>
        <div class="subtitle text-center">Experience our other titles</div>
        <div class="left col-md-6 col-sm-12">
            <div class="game_name font-size-32">Reveries: Dream Flight</div>
            <p>Dream Flight is a beautiful game about exploration and discovery. Learn to guide and collect a variety of magical flight machines, and experience magnificent and breathtaking scenery while enjoying its world class soundtrack
            </p>
            <p>Dream Flight is a hands-free experience. No controllers are needed. However, we highly recommend the use of headphones!</p>
            <div class="download fl">
                <a class="btn" href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" target="_blank">
                    <i class="fa fa-download"></i>
                    DOWNLOAD</a>

            </div>
        </div>
        <div class="right col-md-6 hidden-sm hidden-xs">
            <img src="{{Config::get('constants.CDN_HOST')}}img/game1.png" alt="游戏图片">
        </div>
    </div>
    <div class="subscribe">
        <div class="content">
            <div class="title text-center">WANT TO BE ON THE FRONTIER OF VR INNOVATION</div>
            <form action="{{ url('subscribe') }}" class="form_content" method="post">
                <input type="email" class="email_input" placeholder="YOUR EMAIL" name="email" id="email">
                <button class="subscribe_btn" type="button" onclick="form_submit()">subscribe</button>
            </form>
        </div>
    </div>
   @endsection
@section('script')
<script>
    function form_submit(){
        var ele = $('#email');
        var _email = $('#email').val();
        var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(!myreg.test(_email)){
            alert('E-mail format is incorrect!!!')
            ele.focus();
            return false;
        }else{
            {{--$.post('{{url('subscribe')}}', {email:_email}, function () {--}}
                {{--console.log(_email)--}}
            {{--})--}}
            $.ajax({
                url:'https://multiverseinc.com/subscribe',
                type:'POST',
                data:{email:_email},
                dataType:'json',
                success:function (res) {
                    console.log(res.status)
                    ele.val('');
                    alert('SUCCESS!!!');
                }
            })

        }
    }
</script>
@endsection