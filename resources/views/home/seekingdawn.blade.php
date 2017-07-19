<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>Seeking Dawn Multiverse Inc.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
    <meta name="DC.title" content="Home">
    <meta name="robots" content="index,follow">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{Config::get('constants.CDN_HOST')}}favicon.ico" media="screen" />
    <link href="{{Config::get('constants.CDN_HOST')}}bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="{{Config::get('constants.CDN_HOST')}}css/sk.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{Config::get('constants.CDN_HOST')}}css/style.css">--}}
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/multiverseinc/css/style.css">
    <link rel="stylesheet" href="/fullpage/jquery.fullpage.css">
    <script src="{{Config::get('constants.CDN_HOST')}}js/jquery-3.2.1.js"></script>
    <script rel="stylesheet" src="/js/jquery-ui.js"></script>
    <script rel="stylesheet" src="/fullpage/jquery.fullpage.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                verticalCentered: true,
                continuousVertical: true
            });
        });
    </script>
    <style>
        .section{
            text-align:center;
            overflow: hidden;
        }
        video::-webkit-media-controls-enclosure {
            /*禁用播放器控制栏的样式*/
            display: none !important;
        }
        #banner_video{
            position: absolute;
            right: 0;
            bottom: 0;
            top:0;
            right:0;
            width: 100%;
            height: 100%;
            /*background-size: 100% 100%;*/
            /*background-position: center center;*/
            /*background-size: contain;*/
            /*object-fit: cover; !*cover video background *!*/
            z-index:3;
        }

        #banner_shadow{
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 98;
            background: black;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
            -moz-opacity: 0.5;
            -ms-opacity:0.5;
            opacity:0.5;
        }
        #banner_des{
            z-index: 99;
            position: absolute;
            margin-top: 2.5rem;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 100%;
        }
        #banner_des #video_title{
            display: block;
            max-width: 800px;
            width: 90%;
            height: auto;
            margin: 0 auto;
        }
        #banner_des #video_despriction{
            max-width: 700px;
            width: 100%;
            margin: 0 auto;
            font-size: 1.6rem;
            text-indent: 2em;
            color: #ffffff;
            margin-top: 2rem;
        }
        #banner_des #status{
            width: 240px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: #ffffff;
            margin: 0 auto;
            border: 1px solid #ffffff;
            border-radius: 5px;
            margin-top: 50px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" style="" href="/" id="logo">
                <span class="light"></span><img src="{{Config::get('constants.CDN_HOST')}}img/multiverselogolong.png" align="left" class="img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav" style="text-align: center;">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="index"></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Games</a>
                    <ul class="dropdown-menu" style="background: black;">
                        <li><a href="seekingdawn" style="color: white;">Seeking Dawn</a>
                        <li><a href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" style="color: white;" target="_blank">Dream Flight</a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=com.multiverse.galaxyrush" style="color: white;" target="_blank">Galactic Rush</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    {{--<a href="https://www.linkedin.com/company/multiverse-entertainment">CAREERS</a>--}}
                    <a href="https://www.indeed.com/cmp/Multiverse-Entertainment">CAREERS</a>
                </li>
                {{--<li>
                    <a href="#">DEVBLOG</a>
                </li>--}}
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">ABOUT US</a>
                    <ul class="dropdown-menu" style="background: black;">
                        <li><a href="{{url('about#company')}}" style="color: white;">Company</a>
                        <li><a href="{{url('about#press')}}" style="color: white;">Press</a>
                        <li><a href="{{url('about#partner')}}" style="color: white;">Partners</a>
                        <li><a href="{{url('privacy')}}" style="color: white;">privacy</a>
                        <li><a href="{{url('tos')}}" style="color: white;">Terms of Service</a>
                    </ul>
                </li>
                <li>
                    <a href="contact">Contact</a>
                </li>
                <li>
                    <a href="/cn/">中文网</a>
                </li>
            </ul>
            <ul class="media-link hidden-sm hidden-xs">
                <li><a href="https://www.facebook.com/MultiverseVR/" target="_blank"><i class="fa fa-facebook color-white"></i></a></li>
                <li><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter color-white"></i></a></li>
                <!-- <li><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                <li><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin color-white"></i></a></li>
                <!-- <li><a href="#"><i class="iconfont icon-twitch color-white" target="_blank">&#xe7ed;</i></a></li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div id="fullpage">
    <div id="#banner" class="section">
        <video  preload="auto" autoplay width="100%" id="banner_video" muted="true" poster="{{Config::get('constants.CDN_HOST')}}img/SeekingDawn_Banner.jpg" webkit-playsinline>
        </video>
        <div id="banner_shadow"></div>
        <div id="banner_des"  class="">
            <img id="video_title" src="{{Config::get('constants.CDN_HOST')}}img/SeekingDawn_logo.png">
            <p id="video_despriction" class="des">
                Seeking Dawn is a grand-scaled VR game that blends together Survival, exploration, FPS and RPG elements.  The game puts its players in an immersive alien world filled with interesting creatures, unknown dangers, and many other surprises still to be discovered.
                <br>
                Seeking Dawn is complete with an epic story and characters whose unique personalities shape the world around you. With hundreds of hours of gameplay, you can expect to scavenge, craft, build, explore, fight and so much more as you unfold the mysteries that lay within our game.
            </p>
            <div id="status">
                COMING SOON
            </div>
        </div>
    </div>
    {{--<div class="hidden-lg hidden-md sm-despriction section">
        <p id="video_despriction" class="des">
            Seeking Dawn is a grand-scaled VR game that blends together Survival, exploration, FPS and RPG elements.  The game puts its players in an immersive alien world filled with interesting creatures, unknown dangers, and many other surprises still to be discovered.
            <br>
            Seeking Dawn is complete with an epic story and characters whose unique personalities shape the world around you. With hundreds of hours of gameplay, you can expect to scavenge, craft, build, explore, fight and so much more as you unfold the mysteries that lay within our game.
        </p>
        <div class="status">
            COMING SOON
        </div>
    </div>--}}
    <div class="poster poster1 section">
        <div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
        <div class="title col-md-6 col-md-offset-6 col-sm-12">GAME FEATURES</div>

        <div class="des col-md-6 col-md-offset-6 col-sm-12">
            <p>
                -	CO-OP Campaign<br>
                -	Hundreds of equipment pieces to craft<br>
                -	 Various different Tech Trees to explore<br>
                -	Survival aspects such as hunger, oxygen. And more<br>
                -	Base building, including an arsenal of defense construction options<br>
                -	A variety of newly discovered creatures<br>
                -	RPG elements such as “Gear Rarity Tiers” & combinations of equipment<br>
                -	Unique and impactful use of abilities<br>
                -	Realistic climbing, swimming, and rope swinging elements<br>
                -	And much more!</p>
        </div>
    </div>
    <div class="poster poster2 section">
    <!-- <img src="{{Config::get('constants.CDN_HOST')}}img/poster2.png" alt="poster1" > -->
        <div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
        <div class="title col-md-6 col-md-offset-6 col-sm-12">STORY</div>
        <div class="des col-md-6 col-md-offset-6 col-sm-12">
            <p>In the year 2097, several planets in our system and nearby star systems, including Alpha Centauri, have been colonized by humanity. An entire solar system is in the grips of a corrupt political entity called “The United Federation of Sol” (UFS).<br>
                The people of this time are violently oppressed and live in fear and despair due to the malicious intent of the UFS.<br>
                Humanities only hope for freedom lies in the hands of Lt. James Murphy, a newborn of  the first settlers of the Alpha Centauri system.  Murphy joined what is known as “The Republic of Alpha Centauri” (RAC) at a very young age. His intent was to prove himself in battle during our first attempt at regaining independence. We like to call this our “independence War”. We have lost many battles, and worse yet, many young men and women. RAC is currently on the verge of being completely overrun by the UFS Armada.<br>
                The war has leaded us here; Donovan Crater. Will we ever see the light at the end of this tunnel?

            </p>
        </div>
    </div>
</div>
<!-- Footer -->
</body>

<script src="{{Config::get('constants.CDN_HOST')}}bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{Config::get('constants.CDN_HOST')}}js/grayscale.js"></script>
<!-- Custom Theme JavaScript -->
<script>
    var _video = document.getElementById('banner_video');
    _video.controls = false;
    _video.autoplay = true;
    _video.loop = true;
    _video.preload = true;
    _video.muned = true;
    window.onload = function () {
        document.querySelector("#banner_video").src = '{{Config::get('constants.CDN_HOST')}}video/seekingDawnPlay.mp4';
    }
    $('#banner').on('tap', function () {
        _video.play()
    })
</script>
</html>
