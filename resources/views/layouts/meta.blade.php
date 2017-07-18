<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
<meta name="DC.title" content="Home">
<meta name="robots" content="index,follow">
<meta name="author" content="">
@section('title')
<title>Multiverse Entertainment</title>
@show
<link rel="shortcut icon" type="image/x-icon" href="{{Config::get('constants.CDN_HOST')}}favicon.ico" media="screen" />
<link href="{{Config::get('constants.CDN_HOST')}}bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
<link href="{{Config::get('constants.CDN_HOST')}}css/sk.css" rel="stylesheet">
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{Config::get('constants.CDN_HOST')}}css/style.css">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/multiverseinc/css/style.css">
@section('other')
@show
<!--[if IE 7]>
<link href="//font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
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