<!DOCTYPE HTML>
<html>
<head>
    <!-- HTTPS required. HTTP will give a 403 forbidden response -->
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
</head>
<body>

</body>
<script>
    window.fbAsyncInit() = function () {
        FB.init({
            appId               : '334111223669076',
            autoLogAppEvents    : true,
            xfbml               : true,
            version             : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</html>