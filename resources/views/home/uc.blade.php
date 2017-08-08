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
    <link href="//{{getenv('RESOURCE_PATH')}}{{ mix('/css/uc.css') }}" rel="stylesheet">
</head>
<body>
<div class="uc-header">
    <div class="container">
        <div class="logo"><img src="//{{getenv('RESOURCE_PATH')}}/img/logo.png" alt="logo"></div>
        <div class="right">
            <a href="/logout" class="logout">logout</a>
        </div>
    </div>
</div>
<div class="uc-content">
    <div class="container">
        <div action="#" class="panel">
            <div class="uc-container">
                <p class="title">Base information & friends</p>
                <div class="main-table">
                    <div class="left">
                        <div class="">My profile</div>
                        <div class="">Security</div>
                        <div class="">
                            <p>Quests</p>
                            <p>1. Gain 10 points for referring your first friend</p>
                            <p>2. Gain 5 points for liking our Facebook Page</p>
                            <p>3. Gain 5 point for "following" our Facebook page</p>
                            <p>4. Gain 5 points for joining our community group</p>
                            <p>5. Gain 5 points for following our Twitter Page</p>
                        </div>
                        <div class="">
                            <p>Invite friends</p>
                            <div><input type="text" value="{{ url('ambassador') }}/{{ $point->referral_code }}" readonly id="link"><button id="copy" class="refer" onclick="copy('link', 'copy')">Copy&Share</button></div>
                            <p>The six digits on the link are a recommendation code</p>
                        </div>
                    </div>

                    <div class="right">
                        <div class="profile"><img src="//{{getenv('RESOURCE_PATH')}}/img/d1.png" alt="profile"><p class="name">{{ $user->name }}</p></div>
                        <ul class="reward-list">
                            <li><img src="//{{getenv('RESOURCE_PATH')}}/img/game1.png" alt=""></li>
                            <li><img src="//{{getenv('RESOURCE_PATH')}}/img/game1.png" alt=""></li>
                            <li><img src="//{{getenv('RESOURCE_PATH')}}/img/game1.png" alt=""></li>
                        </ul>
                    </div>
                </div>
                <p class="title">Recommended friends</p>
                <ul class="friends">
                    @if(count($friends)===0)
                        <p>No recommendation of friends, recommend it</p>
                        @else
                        @foreach($friends as $friend)
                            <li><img src="//{{getenv('RESOURCE_PATH')}}/img/game1.png" alt=""><p>{{ $friend->name }}</p></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="uc-footer">
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
    function copy(copytargetid,copybtnid){
        var cpt = document.getElementById(copytargetid);
        var cpb = document.getElementById(copybtnid);
        $(cpt).focus();
        $(cpt).select();
        try{
            if(document.execCommand('copy', false, null)){
                $(cpb).tooltip({title:"copied!", placement: "bottom", trigger: "manual"});
                $(cpb).tooltip('show');
                cpb.onmouseout=function(){$(cpb).tooltip('destroy')};
            } else{
                $(cpb).tooltip({title:"failed!", placement: "bottom", trigger: "manual"});
                $(cpb).tooltip('show');
                cpb.onmouseout=function(){$(cpb).tooltip('destroy')};
            }
        } catch(err){
            $(cpb).tooltip({title:"failed!", placement: "bottom", trigger: "manual"});
            $(cpb).tooltip('show');
            cpb.onmouseout=function(){$(cpb).tooltip('destroy')};
        }
    }
</script>
</html>