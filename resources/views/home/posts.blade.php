<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>blog</title>
    <link href="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{--<link href="//{{getenv('RESOURCE_PATH')}}/css/style.css" rel="stylesheet">--}}
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/post.css') }}" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/footer.css') }}" rel="stylesheet">
    <!--[if IE 7]>
    <link href="//{{getenv('RESOURCE_PATH')}}/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->
    <script src="//at.alicdn.com/t/font_inqu00dwnxfos9k9.js"></script>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_371115_i7q3yrjs84a38fr.css">
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
                        <a href="#">DEVBLOG</a>
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
    <div class="top"></div>
    <div class="blog-banner">
        <div class="container">
            <p class="title">THE DEVELOPERS BLOG</p>
            <P class="des">We will continue to update the blog, welcome enthusiasts and we interact</P>
        </div>
    </div>
    <div class="blog-area">
        <div class="container">
            {{--@foreach($posts as $post)
            <div class="blog col-lg-3 col-md-3 col-xs-3 col-sm-12">
                <div class="thumb"><img src="/uploads/{{$post->thumb or 'thumb1.jpg'}}" alt=""></div>
                <div class="title">{{ $post->title }}</div>
                <div class="create_at">{{ $post->created_at }}</div>
                <div class="des">{{$post->description}} </div>
                <a href="{{url('posts')}}/{{$post->id}}" class="link-href">Read More</a>
            </div>
            @endforeach--}}
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                <div class="blog">
                    <div class="cover"><img src="//{{getenv('RESOURCE_PATH')}}/images/dev_default_cover.jpg" alt="dev_cover"></div>
                    <div class="title"><p>title</p></div>
                    <div class="create_at"><p>2017.08.01</p></div>
                </div>
                <div class="schema">
                    <div class="des"><p>des</p></div>
                    <a href="{{url('posts')}}/1" class="link-href">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="left fl col-sm-12 col-md-4">
            <div class="text"><p><a href="http://www.multiverseinc.com/legal/tos/">Terms of Service </a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank"> Privacy Policy</a></p></div>
            <div class="text" style="">Copyright © Multiverse Entertainment LLC</div>
        </div>
        <div class="center fl col-md-4 hidden-sm hidden-xs">
            <ul class="social-link">
                <li class="fl "><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
                <li class="fl "><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
                <li class="fl "><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
                <li class="fl "><a href="https://www.instagram.com/vrmultiverse/" target="_blank"><i class="fa fa-instagram fa-3x color-white"></i></a></li>
            </ul>
        </div>
        <div class="right fl col-md-4 hidden-sm hidden-xs">
            <span class="text">PARTNERS</span>
            <ul class="platform">
                <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-btn_game_vive"></i></li>
                <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-oculus"></i></li>
                <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-steam"></i></li>
                <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-playstation"></i></li>
            </ul>
        </div>
        <span class="clearfix"></span>
    </div>
    <script src="//{{getenv('RESOURCE_PATH')}}/js/jquery-3.2.1.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="//{{getenv('RESOURCE_PATH')}}/js/grayscale.js"></script>
</body>
</html>