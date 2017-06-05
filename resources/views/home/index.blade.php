<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
    <meta name="DC.title" content="Home">
    <meta name="robots" content="index,follow">
    <meta name="author" content="">
    <title>Multiverse Entertainment</title>
    <link href="/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
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
                        <a href="about">ABOUT</a>
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="about">About</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="about" style="color: white;">Who We Are</a></li>
                            <li><a href="team" style="color: white;">Our Team</a></li>
                            <li><a href="values" style="color: white;">Our Values</a></li>
                            <li><a href="legal" style="color: white;">Legal</a></li>
                        </ul>--}}
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
                        <a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank">Jobs</a>
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

    <div id="banner" class="container-fluid" style="padding: 0px!important;">
        <video  preload="auto" autoplay  width="100%" height="auto" id="banner_video" poster="/img/SeekingDawn_Banner.jpg"  muted="true">
            <source src="https://s3-us-west-2.amazonaws.com/multiverseinc/SeekingDawnAlphaTrailerV1.mp4">
        </video>
        <div id="banner_shadow"  class="hidden-sm hidden-xs"></div>
        <div id="banner_des" class="hidden-sm hidden-xs">
            <img id="video_title" src="/img/SeekingDawn_logo.png">
            <p id="video_despriction">
                Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" chock-full of interesting flora and fauna, unknown dangers and wonderful delights.
            </p>
            <a id="status" href="/seekingdawn">
                LEARN MORE
            </a>
        </div>
    </div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Seeking Dawn is a massive survival-exploration VR game from Multiverse. It puts you into an immersive alien "death world" chock-full of interesting flora and fauna, unknown dangers and wonderful delights.
        </p>
        <a href="/seekingdawn" class="text-align-center" style="display: block;text-align: center;">
            LEARN MORE
        </a>
    </div>
    <div class="creators container">
        <div class="thumb col-lg-6 col-md-6 col-md-6 col-sm-12"><img src="/img/thumb2.jpg" alt=""></div>
        <div class="col-lg-6">
            <div class="subtitle">Multiverse</div>
            <div class="title">THE CREATORS</div>
            <p class="des">We are hardcore gamers, and we wanted a VR game with depth, requires thinking,
                and contains hundreds of hours of addictive gameplay.
                Seeking Dawn will be a VR game of the largest scale, and is being painstaking crafted to perfection.</p>
            <a href="#" class="link-href">LEARN MORE</a>
        </div>
    </div>
    <!--dev blog-->
    <div class="dev-blog container-fluid">
        <div class="container">
            <div class="title-part">
                <p class="subtitle">Blog</p>
                <p class="title">THE DEVELOPERS BLOG</p>
                <p class="des">We will continue to update the blog, welcome enthusiasts and we interact</p>
            </div>
            <div class="blog-area container">
                <div class="blog">
                    <div class="thumb"><img src="/img/thumb2.jpg" alt=""></div>
                    <p class="title">Seeking Dawn</p>
                    <p class="create_at">March 11, 2016</p>
                    <p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                </div>
                <div class="blog ">
                    <div class="thumb"><img src="/img/thumb2.jpg" alt=""></div>
                    <p class="title">Seeking Dawn</p>
                    <p class="create_at">March 11, 2016</p>
                    <p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                </div>
                <div class="blog ">
                    <div class="thumb"><img src="/img/thumb2.jpg" alt=""></div>
                    <p class="title">Seeking Dawn</p>
                    <p class="create_at">March 11, 2016</p>
                    <p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="published_game text-algin container">
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
                    <i class="fa fa-download"></i>
                    DOWNLOAD</a>

            </div>
        </div>
        <div class="right col-md-6 hidden-sm hidden-xs">
            <img src="/img/game1.png" alt="游戏图片">
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
            <div class="text">PARNERST</div>
            <ul class="platform">
                <li class="fl"><img src="/img/vive.png" alt="vive"></li>
                <li class="fl"><img src="/img/oculus.png" alt="Gear VR"></li>
                <li class="fl"><img src="/img/steam.png" alt="SteamVR"></li>
                <li class="fl"><img src="/img/playstation.png" alt="unity"></li>
            </ul>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/grayscale.js"></script>
</body>
</html>