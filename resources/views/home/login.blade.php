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
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-header">
        <div class="container">
            <div class="logo"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></div>
        </div>
    </div>
    <div class="login-content">
        <div class="container">
            <form action="#" class="panel">
                <div class="login-input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="login-input-group">
                    <label for="username">Password</label>
                    <input type="text" id="username" name="password">
                </div>
                <div class="login-input-group">
                    <label for="username">Email</label>
                    <input type="text" id="username" name="email">
                </div>
                <div class="login-input-group">
                    <label for="username">Referral Code</label>
                    <input type="text" id="username" name="referralCode">
                </div>
                <div class="login-input-group">
                    <button class="login-btn-default btn-submit">Sign Up</button>
                    <button class="login-btn-default btn-facebook">Logoin and Like</button>
                    <button class="btn-twitter login-btn-default">Login and Follow</button>
                </div>
            </form>
        </div>
    </div>
    <div class="login-footer">
        <div class="left"></div>
        <div class="right"></div>
    </div>
</body>

</html>
