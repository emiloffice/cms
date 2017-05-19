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
<div class="white-background">
    <div class="container article">
        <h1>{{ $post->title }}</h1>
        {!! $post->content !!}
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
