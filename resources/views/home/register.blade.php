<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>Seeking Dawn Multiverse Inc.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Welcome to Multiverse Entertainment LLC, a professional virtual reality game development and publishing company.">
    <meta name="DC.title" content="Home">
    <meta name="robots" content="index,follow">
    <meta name="author" content="EmilWong">
    <link rel="shortcut icon" type="image/x-icon" href="//{{getenv('RESOURCE_PATH')}}/favicon.ico" media="screen" />
    <link href="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/reg.css') }}" rel="stylesheet">
</head>
<body>
    <div class="reg-header">
        <div class="container">
            <div class="logo"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></div>
        </div>
    </div>
    <div class="reg-content">
        <div class="container">
            <form action="{{ url('user/register') }}" class="panel" method="POST">
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
                    {{--<button class="login-btn-default btn-facebook">Logoin&Like</button>
                    <button class="btn-twitter login-btn-default">Login&Follow</button>--}}
                </div>
                <div class="reg-input-group">
                    <p>Registered account, <a href="{{ url('login') }}" class="login-href">login</a> now!</p>
                </div>
            </form>
        </div>
    </div>
    <div class="reg-footer">
        <div class="container">
            <div class="left">
                <a href="#">Terms of Service</a>|<a href="#">Privacy Policy</a>
                <p>Copyright © Multiverse Entertainment LLC</p>
            </div>
            <div class="right"></div>
        </div>
    </div>
</body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '334111223669076',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</html>
