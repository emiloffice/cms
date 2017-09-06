{{--
<div class="footer">
    <div class="left fl col-sm-12 col-md-4">
        --}}
{{--<div class="text"><a href="http://www.multiverseinc.com/legal/tos/">服务条款 </a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank"> 隐私政策</a> 	</div>--}}{{--

        <div class="text">Copyright © 深圳摩登世纪科技有限公司</div>
        <div class="text">Record: <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备16110936-1</a></div>
    </div>
    <div class="center fl col-md-4 hidden-sm hidden-xs">
        --}}
{{--<ul>
            <li class="fl pd-20"><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
            <li class="fl pd-20"><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
            <!-- <li class="fl"><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
            <li class="fl pd-20"><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
            <!-- <li class="fl"><a href="#"><i class="iconfont icon-twitch color-white">&#xe7ed;</i></a></li> -->
        </ul>--}}{{--

    </div>
    <div class="right fl col-md-4 hidden-sm hidden-xs">
        <div class="text">合作伙伴</div>
        <ul class="platform">
            <li class="fl col-lg-4"><img src="/img/vive.png" alt="vive"></li>
            <li class="fl col-lg-4"><img src="/img/oculus.png" alt="Gear VR"></li>
            <li class="fl col-lg-4"><img src="/img/steam.png" alt="SteamVR"></li>
            --}}
{{--<li class="fl"><img src="/img/playstation.png" alt="unity"></li>--}}{{--

        </ul>
    </div>
</div>
<script src="/js/jquery-3.2.1.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/js/grayscale.js"></script>
@section('other')

    @show
@section('script')

    @show


--}}

<div class="footer">
    <div class="left fl col-sm-12 col-md-4">
        <div class="text"><p><a href="http://www.multiverseinc.com/legal/tos/">服务条款</a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank">隐私政策</a></p></div>
        <div class="text" style="">Copyright © 深圳摩登世纪科技有限公司</div>
    </div>
    <div class="center fl col-md-4 hidden-sm hidden-xs">
        <ul class="social-link">
            <li class="fl "><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
            <li class="fl "><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
            <li class="fl "><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
            <li class="fl "><a href="https://www.instagram.com/vrmultiverse/" target="_blank"><i class="fa fa-instagram fa-3x color-white"></i></a></li>
        </ul>
    </div>
    <div class="right fl col-md-4 hidden-sm hidden-xs">
        <span class="text">PARTNERS</span>
        <ul class="platform">
            <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-btn_game_vive"></i></li>
            <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-oculus"></i></li>
            <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-steam"></i></li>
            <li class="fl col-lg-3 col-md-3"><i class="iconfont icon-playstation"></i></li>
        </ul>
    </div>
    <span class="clearfix"></span>
</div>
<script src="//{{getenv('RESOURCE_PATH')}}/js/jquery-3.2.1.js"></script>
<script src="//{{getenv('RESOURCE_PATH')}}/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="//{{getenv('RESOURCE_PATH')}}/js/grayscale.js"></script>
@section('other')
@show
@section('script')
@show