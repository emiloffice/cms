<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Multiverse Entertainment LLC </title>
    <meta name="author" content="Emil Wong" />
    <link rel="stylesheet" type="text/css" href="/fullpage/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="/examples.css" />


    <style>
        /* Sections
         * --------------------------------------- */
        .section{
            background: url("/images/bg.jpg") no-repeat center;
        }
        .section p{
            color: #999999;
        }
        #section0 img{
            width: 100%;
        }
        #section1 img{
            position: absolute;
            top: 10px;
            left: 10px;
        }
        #section2 img{
            position: absolute;
            top: 30px;
            left: 10%;
        }
        .intro p{
            width: 50%;
            margin: 0 auto;
            font-size: 1.5em;
        }
        .twitter-share-button{
            position: absolute;
            z-index: 99;
            right: 149px;
            top: 9px;
        }

    </style>
    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="/js/jquery-3.2.1.js"></script>
    <script src="/js/jquery-ui.js"></script>

    <script type="text/javascript" src="/fullpage/jquery.fullPage.js"></script>
    <script type="text/javascript" src="/examples.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                menu: '#menu',
                scrollingSpeed: 1000
            });

        });
    </script>

</head>
<body>

{{--
<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
    <li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
</ul>
--}}


<div id="fullpage">
    <div class="section " id="section0">
        <img src="/images/index-banner.png" alt="">
    </div>
    {{--<div class="section active" id="section1">
        <div class="slide">
            <div class="intro">

            </div>

        </div>
        <div class="slide">
            <div class="intro">
                <h1>Simple</h1>
                <p>Easy to use. Configurable and customizable.</p>
            </div>
        </div>
        <div class="slide">
            <div class="intro">
                <h1>Cool</h1>
                <p>It just looks cool. Impress everybody with a simple and modern web design!</p>
            </div>
        </div>
        <div class="slide">
            <div class="intro">
                <h1>Compatible</h1>
                <p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
            </div>
        </div>
    </div>--}}
    <div class="section" id="section1">
        <img src="/images/released-games.png" alt="RELEASED GAMES">
        <ul class="game-list">
            <li>
                <div class="thumb"></div>
                <div class="play_btn" onclick="play_video()"></div>
            </li>
        </ul>
        <div class="intro">

        </div>
    </div>
    <div class="section" id="section2">
        <img src="/images/about-us.png" alt="ABOUT US">
        <p><span class="title">我们的愿景</span>
            我们希望能够成为世界顶尖的游戏开发商，做出能够风靡世界的3A游
            戏，为中国游戏的崛起做出努力。</p>
        <p><span class="title">我们的价值观</span>
            我们的价值观是做好玩的游戏，至始至终以游戏性为目的去研发游戏，做顶尖的和精品的游戏。</p>
    </div>
    <div class="section" id="section3">
        <div class="intro">
            <h1>Working On Tablets</h1>
            <p>
                Designed to fit to different screen sizes as well as tablet and mobile devices.
                <br /><br /><br /><br /><br /><br />
            </p>
        </div>
    </div>
</div>

</body>
</html>