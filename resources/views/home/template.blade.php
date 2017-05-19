<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="DC.title" content="">
    <meta name="robots" content="">
    <meta name="author" content="">

    <title>Multiverse Entertainment</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/grayscale.css') }}" rel="stylesheet">

    <!-- Lity Lightbox -->
    <link href="{{ asset('/css/lity.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

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
                    <span class="light"></span><img src="/img/multiverselogolong.png" align="left" style="height: auto; width: 100%;">
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
                            <li><a href="comingsoon" style="color: white;">Coming Soon</a>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Particle Background Canvas -->
    <div id="particles-js" style="position: fixed; z-index: -999; width: 100vw; height: 100vh;">
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1920" height="589">
    </div>

    <!-- Banner -->
    <div class="banner" style="background-image: url(/img/downloads-bg.jpg)">
        <div class="container-fluid text-center">
            <div class="row">
                <h1 class="banner-title">Title</h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section id="" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <i style="font-size:15px">Copyright &copy; Multiverse Entertainment LLC 2016</i>
        </div>
    </footer>

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

    <!-- Lity Lightbox -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/lity.js') }}"></script>
    
</body>

</html>