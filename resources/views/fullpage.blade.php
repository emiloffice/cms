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
        #section0 img,
        #section1 img{
            width: 100%;
        }
        #section2 img{
            margin: 20px 0 0 52px;
        }
        #section3 img{
            bottom: 0px;
            position: absolute;
            margin-left: -420px;
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

<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
    <li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
</ul>


<div id="fullpage">
    <div class="section " id="section0">
        <img src="/images/index-banner.png" alt="">
    </div>
    <div class="section active" id="section1">
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
    </div>
    <div class="section" id="section2">
        <div class="intro">
            <h1>Example</h1>
            <p>HTML markup example to define 4 sections.</p>
        </div>
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