<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
    <meta name="DC.title" content="Home">
    <meta name="robots" content="index,follow">
    <meta name="author" content="">

    <title>Multiverse Entertainment</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/grayscale.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Google Analytics for www.multiverseinc.com -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80726941-2', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- Hotjar Tracking Code for http://www.multiverseinc.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:261362,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" style="width: 225px;" href="/">
                    <span class="light"></span><img src="/img/multiverselogolong.png" align="left" class="img-responsive">
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="about">About</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="about" style="color: white;">Who We Are</a></li>
                            <li><a href="team" style="color: white;">Our Team</a></li>
                            <li><a href="values" style="color: white;">Our Values</a></li>
                            <li><a href="legal" style="color: white;">Legal</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">Games</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="ourgames" style="color: white;">Our Games</a></li>
                            <li><a href="seekingdawn" style="color: white;">Seeking Dawn</a>
                        </ul>
                    </li>
                    <li>
                        <a href="publishing">Publishing</a>
                    </li>
                    <li>
                        <a href="jobs">Jobs</a>
                    </li>
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
                <ul class="banner_link hidden-sm hidden-xs">
                    <li><a href="https://www.facebook.com/MultiverseVR/" target="_blank"><i class="iconfont icon-facebook color-white">&#xe613;</i></a></li>
                    <li><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="iconfont icon-socialmediaiconwhitetwitter color-white">&#xe601;</i></a></li>
                    <!-- <li><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                    <li><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="iconfont icon-linkedin color-white">&#xe615;</i></a></li>
                    <!-- <li><a href="#"><i class="iconfont icon-twitch color-white" target="_blank">&#xe7ed;</i></a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="banner" class="container-fluid" style="padding: 0px!important;">
        <video  preload="auto" autoplay  width="100%" height="auto" id="banner_video" poster="/img/SeekingDawn_Banner.png"  muted="true">
            <source src="/video/SeekingDawnAlphaTrailerV1.mp4">
        </video>
        <div id="banner_shadow"  class="hidden-sm hidden-xs"></div>
        <div id="banner_des" class="hidden-sm hidden-xs">
            <img id="video_title" src="/img/SeekingDawn_logo.png"></img>
            <p id="video_despriction">
                Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" chock-full of interesting flora and fauna, unknown dangers and wonderful delights.
            </p>
            <a id="status" href="/seekingdawn">
                LEARN MORE
            </a>
        </div>
    </div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p id="video_despriction">
                &nbsp;&nbsp;&nbsp;&nbsp;Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" chock-full of interesting flora and fauna, unknown dangers and wonderful delights.
        </p>
        <a id="status" href="/seekingdawn" class="text-align-center" style="display: block;text-align: center;">
            LEARN MORE
        </a>
    </div>
    <div class="creators">
        <div class="content col-sm-12 col-md-6 col-md-offset-6">
            <div class="name">Multiverse</div>
            <div class="title">THE CREATORS</div>
            <div class="des">We are hardcore gamers, and we wanted a VR game with depth,
                requires thinking, and contains hundreds of hours of addictive gameplay.
                Seeking Dawn will be a VR game of the largest scale,
                and is being painstaking crafted to perfection.
            </div>
            <a class="contact" href="http://www.multiverseinc.com/contact">CONTACT</a>
        </div>

    </div>
    <div class="developers_blog " style="display: none;">
        <div class="top">
            <div class="subtitle">Project Plan</div>
            <div class="title">THE DEVELOPERS BLOG</div>
            <div class="des">We will continue to update the blog, welcome enthusiasts and we interact</div>
        </div>
        <div class="bottom">
            <div class="blog fl">
                <div class="publish_time">2017-04-12</div>
                <div class="blog_title">Seeking Dawn  Early Access: The Boss Update 0.4 Now Live!</div>
                <div class="blog_cover">
                    <img src="/img/blog_cover_1.png" alt="日志封面">
                </div>
            </div>
            <div class="blog fl">
                <div class="publish_time">2017-04-12</div>
                <div class="blog_title">Seeking Dawn  Early Access: The Boss Update 0.4 Now Live!</div>
                <div class="blog_cover">
                    <img src="/img/blog_cover_1.png" alt="日志封面">
                </div>
            </div>
            <div class="blog fl">
                <div class="publish_time">2017-04-12</div>
                <div class="blog_title">Seeking Dawn  Early Access: The Boss Update 0.4 Now Live!</div>
                <div class="blog_cover">
                    <img src="/img/blog_cover_1.png" alt="日志封面">
                </div>
            </div>
        </div>
    </div>
    <div class="published_game text-algin">
        <div class="title font-size-32 text-align-center">
            THE ONLINE GAME
        </div>
        <div class="subtitle text-align-center">these games worth you experience</div>
        <div class="left col-md-6 col-sm-12">
            <div class="game_name font-size-32">Reveries: Dream Flight</div>
            <p>Dream Flight is a beautiful game about exploration and discovery. Learn to guide and collect a variety of magical flight machines, and experience magnificent and ethereal scenery underwritten by a mesmerizing soundtrack.</p>
            <p>Dream Flight is a hands-free experience. No controller is needed. However, headphones are highly recommended!</p>
            <div class="download fl">
            	<a class="btn" href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" target="_blank">
                <i class="iconfont icon color-white">&#xe637;</i>
                DOWNLOAD</a>

            </div>
            <div class="fl">
                <i class="iconfont icon color-white icon-next">&#xe612;</i>
            </div>
        </div>
        <div class="right col-md-6 hidden-sm hidden-xs">
            <img src="/img/game1.png" alt="游戏图片">
        </div>
    </div>
    <div class="subscribe" style="display: none">
        <div class="content">
            <div class="title text-align-center">WANT TO BE ON THE FRONTIER OF VR INNOVATION</div>
            <form action="" class="form_content">
                <input type="text" class="email_input" placeholder="YOUR EMAIL" name="email" id="email">
                <div class="subscribe_btn">subscribe</div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="left fl col-sm-12 col-md-4">
            <div class="text"><a href="http://www.multiverseinc.com/legal/tos/">Terms of Service </a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank"> Privacy Policy</a> 	</div>
            <div class="text">Copyright © Shenzhen Modengshiji Technology Co. Ltd. ICP</div>
            <div class="text">Record: <a href="">粤ICP备16110936-1</a></div>
        </div>
        <div class="center fl col-md-4 hidden-sm hidden-xs">
            <ul>
                <li class="fl"><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="iconfont icon-facebook color-white">&#xe613;</i></a></li>
                <li class="fl"><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="iconfont icon-socialmediaiconwhitetwitter color-white">&#xe601;</i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                <li class="fl"><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="iconfont icon-linkedin color-white">&#xe615;</i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-twitch color-white">&#xe7ed;</i></a></li> -->
            </ul>
        </div>
        <div class="right fl col-md-4 hidden-sm hidden-xs">
            <div class="text">PARNERST</div>
            <ul class="platform">
                <li class="fl"><img src="/img/vive.png" alt="vive"></li>
                <li class="fl"><img src="/img/oculus.png" alt="Gear VR"></li>
                <li class="fl"><img src="/img/steam_logo.png" alt="SteamVR"></li>
                <li class="fl"><img src="/img/psLogo.png" alt="unity"></li>
            </ul>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/grayscale.js') }}"></script>

    <!-- Particle BG JavaScript -->
    <script src="{{ asset('/js/particles.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script type="text/javascript">
        var _video = document.getElementById('banner_video');
        _video.controls = false;
        _video.autoplay = true;
        _video.loop = true;
        _video.preload = true;    
        _video.muted = true;
    </script>
</body>

</html>
