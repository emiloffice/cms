<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>Multiverse Entertainment LLC | user log in</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
    <meta name="DC.title" content="Home">
    <meta name="robots" content="index,follow">
    <meta name="author" content="EmilWong">
    <link rel="shortcut icon" type="image/x-icon" href="//{{getenv('RESOURCE_PATH')}}/favicon.ico" media="screen" />
    <link href="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/m.css') }}" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/m-login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_371115_i7q3yrjs84a38fr.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></div>
        </div>
    </div>
    <div class="login-content">
            <form action="{{ url('login', '', true) }}" class="panel" method="POST">
                {{--{!! csrf_field() !!}--}}
                {{ csrf_field() }}
                <div class="login-input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="login-input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="login-input-group">
                    <button class="login-btn-default btn-submit">Log In</button>
                    <a class="reg-btn-oauth" href="{{url('OAuth/facebook', '', true)}}"><p><i class="fa fa-facebook"></i> Log In</p></a>
                    <a class="reg-btn-oauth" href="{{url('OAuth/twitter', '', true)}}"><p><i class="fa fa-twitter"></i> Log In</p></a>
                </div>
                <div class="login-input-group">
                    <p>If you have an account, <a href="{{ url('register', '',true) }}" class="login-href">sign up</a> now!</p>
                </div>
            </form>
    </div>
    <div class="footer">
        <div class="container">
            <p class="social_media">
                <a href="https://www.facebook.com/MultiverseVR"><i class="iconfont icon-facebookf"></i></a>
                <a href="https://twitter.com/VRmultiverse"><i class="iconfont icon-twitter"></i></a>
                <a href="https://discordapp.com/invite/3ECGtyR"><i class="iconfont icon-discord"></i></a>
            </p>
            <div class="left">
                <a href="#">Terms of Service</a>|<a href="#">Privacy Policy</a>
                <p>Copyright © Multiverse Entertainment LLC</p>
            </div>
            <div class="right"></div>
        </div>
    </div>
</body>
<script src="http://at.alicdn.com/t/font_371115_i7q3yrjs84a38fr.js"></script>
</html>
