<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>About</title>
    <link href="/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!--[if IE 7]>
    <link href="/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">Games</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="seekingdawn" style="color: white;">Seeking Dawn</a>
                            <li><a href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" style="color: white;" target="_blank">Dream Flight</a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.multiverse.galaxyrush" style="color: white;" target="_blank">Galactic Rush</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="https://www.linkedin.com/company/multiverse-entertainment">CAREERS</a>
                    </li>
                    <li>
                        <a href="posts">DEVBLOG</a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">ABOUTS</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="{{url('about#company')}}" style="color: white;">Company</a>
                            <li><a href="{{url('about#press')}}" style="color: white;">Press</a>
                            <li><a href="{{url('about#partner')}}" style="color: white;">Partner</a>
                            <li><a href="{{url('privacy')}}" style="color: white;">privacy</a>
                            <li><a href="{{url('tos')}}" style="color: white;">Terms of Service</a>
                        </ul>
                    </li>
                    <li>
                        <a href="contact">Contact</a>
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

    <div class="banner about-banner text-center">
        <div class="container">
            <p class="title">Multiverse</p>
            <p class="subtitle">Create <span>Virtual</span> Real<span>ity</span>    Games</p>
            <p class=""><span>Premium virtual Reality Content Publisher</span></p>
        </div>
    </div>
    <div class="company container-fluid text-center tab-area">
        <p class="title ">OUR COMPANY</p>
        <ul id="company-content" class="tab-content container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <li class="active">To provide help for excellent developers to create and build extraordinary games.</li>
            <li>Working with creativeness, efficiency and joy.</li>
            <li>MULTIVERSE is found in March 2016, the initial published game <Dream Flight> has gained a magnificent review from Gear VR. Through an entire year of efforts, finally a well-crafted new game <Seeking Dawn> is coming soon...</li>
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
                    <div class="thumb"><img src="/img/press1.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="/img/press2.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="/img/press3.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
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
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/vive.png') }}" alt="vive"></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/oculus.png') }}" alt=""></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/steam.png') }}" alt=""></li>
            </ul>

            {{--<div class="join-area">
                <div class="col-lg-8 col-lg-offset-2">
                    <span class="col-lg-6">Want to join our team</span> <a href="#" class="">Search Jobs</a>
                </div>
            </div>--}}
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
                <li class="fl pd-20"><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
                <li class="fl pd-20"><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                <li class="fl pd-20"><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-twitch color-white">&#xe7ed;</i></a></li> -->
            </ul>
        </div>
        <div class="right fl col-md-4 hidden-sm hidden-xs">
            <div class="text">PARTNERS</div>
            <ul class="platform">
                <li class="fl"><img src="/img/vive.png" alt="vive"></li>
                <li class="fl"><img src="/img/oculus.png" alt="Gear VR"></li>
                <li class="fl"><img src="/img/steam.png" alt="SteamVR"></li>
                {{--<li class="fl"><img src="/img/playstation.png" alt="unity"></li>--}}
            </ul>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/grayscale.js"></script>
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
</body>
</html>