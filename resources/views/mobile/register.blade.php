<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>Multiverse Entertainment LLC | user sign up</title>
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
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/m-reg.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_371115_i7q3yrjs84a38fr.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo"><a href="{{url('ambassador')}}"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></a></div>
        </div>
    </div>
    <div class="reg-content">
            <form action="{{ url('register', '', true) }}" class="panel" method="POST">
                {{--{!! csrf_field() !!}--}}
                {{ csrf_field() }}
                <div class="reg-input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="reg-input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="reg-input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="reg-input-group">
                    <label for="referralCode">Referral Code</label>
                    <input type="text" id="referralCode" name="referral_code" value="{{ $code }}">
                </div>
                <div class="reg-input-group">
                    <button class="reg-btn-default btn-submit">Register</button>
                    <a class="reg-btn-oauth" href="{{url('OAuth/facebook')}}"><p><i class="fa fa-facebook"></i> Register</p></a>
                    <a class="reg-btn-oauth" href="{{url('OAuth/twitter')}}"><p><i class="fa fa-twitter"></i> Register</p></a>
                </div>
                <div class="reg-input-group">
                    <p>Registered account, <a href="{{ url('login') }}" class="login-href">login</a> now!</p>
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
        </div>
    </div>
</body>
<script src="http://at.alicdn.com/t/font_371115_i7q3yrjs84a38fr.js"></script>
</html>
