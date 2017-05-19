<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Welcome to Multiverse Entertainment LLC, a premier virtual reality game studio and publishing company.">
	<meta name="DC.title" content="Home">
	<meta name="robots" content="index,follow">
	<meta name="author" content="">
	<title>SeekingDawn</title>

	
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/grayscale.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sk.css') }}" rel="stylesheet">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
                        <a href="/index"></a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/about">About</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="/about" style="color: white;">Who We Are</a></li>
                            <li><a href="/team" style="color: white;">Our Team</a></li>
                            <li><a href="/values" style="color: white;">Our Values</a></li>
                            <li><a href="/legal" style="color: white;">Legal</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">Games</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="/ourgames" style="color: white;">Our Games</a></li>
                            <li><a href="/seekingdawn" style="color: white;">Seeking Dawn</a>
                        </ul>
                    </li>
                    <li>
                        <a href="/publishing">Publishing</a>
                    </li>
                    <li>
                        <a href="/jobs">Jobs</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
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
	<div id="banner" class="">
		<video  preload="auto" autoplay controls="controls" width="100%" height="auto" id="banner_video" muted="true" poster="/img/SeekingDawn_Banner.png" >
			<source src="/video/seekingDawnPlay.mp4">
		</video>
		<div id="banner_shadow"></div>
		<div id="banner_des"  class="hidden-sm hidden-xs">
			<img id="video_title" src="/img/SeekingDawn_logo.png"></img>
			<p id="video_despriction" class="des">
				Seeking Dawn is a large scale survival-exploration FPS/RPG VR game from Multiverse. It puts the player into an immersive alien "death world" full of interesting creatures, unknown dangers and wonderful delights, complete with an epic story and characters with vivid personality.<br>
				The game will feature more than 10 hours of content for the average player on the first play-through. Harder challenges and the lure of better loot ensure subsequent play-throughs remain fun and attractive.
			</p>
			<div id="status">
				COMING SOON
			</div>
		</div>
	</div>
	<div class="poster poster1 section">
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">Game Features</div>
        
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>
				multiplayer co-op<br>
				expansive and deep equipment crafting and tech trees<br>
				cooking<br>
				building and defense construction<br>
				many amazing creatures with delightful behavior<br>
				several new breathtaking biomes<br>
				gear rarity tiers and many combinations of weapons and equipment<br>
				many interesting special abilities<br>
				climbing, swimming, rope swinging, etc.<br>
				and more!</p>
		</div>
	</div>
	<div class="poster poster2 section">
		<!-- <img src="/img/poster2.png" alt="poster1" > -->
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">STORY</div>
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>In the year 2097, several planets of the Solar System, and the nearest star systems, including Alpha Centauri, have been colonized by humanity.<br>
                The entire Solar System is in the grip of a corrupt political entity, the United Federation of Sol (UFS). People are violently oppressed and live in despair.<br>
                Lt. James Murphy, born to parents who were the very first settlers of the Alpha Centauri system, joined the Republic of Alpha Centauri (RAC) military at a young age and proved <br>
                himself in battle in the Independence War. However, it has been a difficult war and RAC forces are on the verge of being overun by the UFS Armada.<br>
                You must lead your men and take back Donovan Crater at all costs, Lt. Murphy.<br>
            </p>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container text-center">
			<!--<i style="font-size:15px">Copyright &copy; Multiverse Entertainment LLC 2016</i>-->
			<i style="font-size:15px">Copyright &copy; Multiverse Entertainment, ICP Record: 粤ICP备16110936</i>
		</div>
	</footer>

	<!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="/js/grayscale.js"></script>
        <!-- Particle BG JavaScript -->
    <script src="{{ asset('/js/particles.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        /**
        s$(function(){
            $('#fullpage').fullpage();
        });
        var w = window.screen.width
        var h = $(document.body).height()
        var _video = document.getElementById('banner_video');
        var _shadow = document.getElementById('banner_shadow');
        console.log(h);
        _video.setAttribute('height', h+'px');
        console.log(_video.style.height);
        **/
    </script>
    <script>
        var _video = document.getElementById('banner_video');
        _video.controls = false;
        _video.autoplay = true;
        _video.loop = true;
        _video.preload = true;
        _video.muned = true;
    </script>
</body>
</html>