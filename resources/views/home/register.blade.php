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
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/reg.css') }}" rel="stylesheet">
</head>
<body>
    <div class="reg-header">
        <div class="container">
            <div class="logo"><a href="{{url('ambassador')}}"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></a></div>
        </div>
    </div>
    <div class="reg-content">
        <div class="container">
        <form action="{{ url('register', '', true) }}" class="panel" method="POST">
            {{--{!! csrf_field() !!}--}}
            {{ csrf_field() }}

            <div class="reg-input-group">
                <label for="username"><i class="required">*</i>Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="reg-input-group">
                <label for="email"><i class="required">*</i>Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="reg-input-group">
                <label for="password"><i class="required">*</i>Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="reg-input-group">
                <label for="referralCode">Referral Code</label>
                <input type="text" id="referralCode" name="referral_code" value="{{ $code }}" placeholder="Not required">
            </div>
            <div class="reg-input-group">
                    <button class="reg-btn-default btn-submit">Sign up</button>
                <a class="reg-btn-oauth" href="{{ url('OAuth/facebook', '', true)}}"><p><i class="fa fa-facebook"></i> Sign up</p></a>
                <a class="reg-btn-oauth" href="{{ url('OAuth/twitter','', true) }}"><p><i class="fa fa-twitter"></i> Sign up</p></a>
            </div>
            <div class="reg-input-group">
                <p>Have an account already? <a href="{{ url('login', '', true) }}" class="login-href">login</a> now!</p>
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
<script src="//{{getenv('RESOURCE_PATH')}}/js/jquery-3.2.1.js"></script>
<script src="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/js/bootstrap.js"></script>
<script>
    /*function tips(content,copybtnid){
        var cpb = document.getElementById(copybtnid);
        $(cpb).tooltip({title:!", placement: "right", trigger: "manual"});
        $(cpb).tooltip('show');
        cpb.onmouseout=function(){$(cpb).tooltip('destroy')};
    }*/
</script>
</html>
