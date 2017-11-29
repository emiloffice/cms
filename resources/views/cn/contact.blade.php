@extends('layouts.CnMaster')
@section('meta')
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=6dc20d244b122a968c2b35c23e8ec405"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
    @endsection
@section('content')
    <div class="banner contact-banner">
        <div class="container">
            <div class="title">联系我们</div>
            <div class="des"></div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif
    <div class="container contact-form">
        <h2 class="text-center">有什么好的意见和建议?</h2>
        <form action="{{ url('contact', '',true) }}" class="" method="post">
            {{ csrf_field() }}
            <div class="contact-input col-lg-6">
                <div class="form-group">
                    <label for="name" class="sr-only"></label>
                    <input type="text" placeholder="姓名" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="organization" class="sr-only"></label>
                    <input type="text" placeholder="公司" name="organization"  class="form-control" id="organization">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only"></label>
                    <input type="email" placeholder="Email" name="email"  class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="tel" class="sr-only"></label>
                    <input type="tel" placeholder="手机" name="phone"  class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only"></label>
                    <textarea name="message" placeholder="内容" id="message" rows="3"  class="form-control" style="width: 100%"></textarea>
                </div>
                <div class="btn-block text-center">

                    <button type="submit" class="btn btn-danger">发送</button>
                </div>
            </div>
        </form>
    </div>
    <div class="clear_fix"></div>
    <div class="contact-link">
        <div class="title text-center">联系方式</div>
        <div class="container">
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="mailto:contact@multiverseinc.com" target="_blank">常规交流:contact@multiverseinc.com</a></li>
                <li><a href="mailto:bo.liu@multiverseinc.com" target="_blank">公共关系:bo.liu@multiverseinc.com</a></li>
                <li><a href="mailto:lilian.chen@multiverseinc.com" target="_blank">英才招聘:lilian.chen@multiverseinc.com</a></li>
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">商务合作:chenjun.li@multiverseinc.com</a></li>
            </ul>
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="" target="_blank">facebook.com/MultiverseVR</a></li>
                <li><a href="" target="_blank">twitter.com/VRmultiverse</a></li>
                <li><a href="" target="_blank">instagram.com//MultiverseVR</a></li>
                <li><a href="" target="_blank">linkedin.com/company/multiverse-entertainment</a></li>
            </ul>
        </div>

    </div>
    <div class="container text-center" style="padding-top: 5rem;padding-bottom: 5rem;">
        <p>地址：<span>广东省深圳市南山区南山大道南园枫叶大厦25楼G室</span></p>
        <p>邮箱：<span>contact@multiverseinc.com</span></p>
        <p>联系电话：<span>13812345678</span></p>
    </div>
    {{--<div id="googleMap" style="width: 100%;height: 30rem">

    </div>--}}
    <div id="amap" style="height: 30rem"></div>
    <div id="tip" class="tip"></div>
@endsection
@section('other')
    {{--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCWrXFcigxn4wV3r1vKeX-k6GUorhCgQhY&sensor=false"></script>--}}
    @endsection

@section('script')
    <script>
    var map = new AMap.Map('amap', {
    resizeEnable: true,
    center: [113.9213000000, 22.5169200000],
    zoom: 13
    });
    var marker = new AMap.Marker({
    position: map.getCenter()
    });
    marker.setMap(map);
    // 设置鼠标划过点标记显示的文字提示
    marker.setTitle('');

    // 设置label标签
    marker.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
    offset: new AMap.Pixel(20, 20),//修改label相对于maker的位置
    content: "南园枫叶大厦"
    });
    </script>
@endsection
