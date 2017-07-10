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
                    <a href="/cn/">EN/CN</a>
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
