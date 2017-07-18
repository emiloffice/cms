<div class="footer">
    <div class="left fl col-sm-12 col-md-4">
        <div class="text"><a href="http://www.multiverseinc.com/legal/tos/">Terms of Service </a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank"> Privacy Policy</a> 	</div>
        <div class="text">Copyright © Multiverse Entertainment LLC</div>
    </div>
    <div class="center fl col-md-4 hidden-sm hidden-xs">
        <ul>
            <li class="fl pd-20"><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
            <li class="fl pd-20"><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
            <!-- <li class="fl"><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
            <li class="fl pd-20"><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
            <!-- <li class="fl"><a href="#"><i class="iconfont icon-twitch color-white">&#xe7ed;</i></a></li> -->
        </ul>
    </div>
    <div class="right fl col-md-4 hidden-sm hidden-xs">
        <div class="text">PARTNERS</div>
        <ul class="platform">
            <li class="fl col-lg-4 col-md-4"><img src="{{Config::get('constants.CDN_HOST')}}img/vive.png" alt="vive"></li>
            <li class="fl col-lg-4 col-md-4"><img src="{{Config::get('constants.CDN_HOST')}}img/oculus.png" alt="Gear VR"></li>
            <li class="fl col-lg-4 col-md-4"><img src="{{Config::get('constants.CDN_HOST')}}img/steam.png" alt="SteamVR"></li>
            <li class="fl col-lg-4 col-md-4"><img src="/img/playstation.png" alt="playstation"></li>
        </ul>
    </div>
</div>
<script src="{{Config::get('constants.CDN_HOST')}}js/jquery-3.2.1.js"></script>
<script src="{{Config::get('constants.CDN_HOST')}}bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{Config::get('constants.CDN_HOST')}}js/grayscale.js"></script>
@section('other')
    @show
@section('script')
    @show