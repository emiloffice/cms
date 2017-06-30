@extends('layouts.CnMaster')
@section('title')
    <title>SeekingDawn • Multiverse • 深圳摩登世纪科技有限公司</title>
    @endsection
@section('meta')
    <link href="{{ asset('/css/sk.css') }}" rel="stylesheet">
@endsection
@section('content')
	<div id="banner" class="">
		<video  preload="auto" autoplay controls="controls" width="100%" height="auto" id="banner_video" muted="true" poster="{{url('img/SeekingDawn_Banner.jpg')}}" >
			<source src="/video/seekingDawnPlay.mp4">
		</video>
		<div id="banner_shadow"></div>
		<div id="banner_des"  class="hidden-sm hidden-xs">
			<img id="video_title" src="{{url('img/SeekingDawn_logo.png')}}"></img>
			<p id="video_despriction" class="des">
                《Seeking Dawn》是来自Multiverse的一款大型生存/探索/FPS/RPG类VR游戏。它将让你身临其境，进入异星的“死亡世界”——一个充满奇特动植物、未知危险以及各种惊喜的世界，体验史诗般的故事情节、充满个性的人物以及完整宏大的世界观。
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们是一群来自世界顶级AAA工作室的狂热游戏爱好者，团聚在一起是为了制作出一款有新意、有深度并能让人沉浸在VR世界中数百小时的游戏。
            </p>
			<div id="status">
				COMING SOON
			</div>
		</div>
	</div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p id="video_despriction" class="des">
            《Seeking Dawn》是来自Multiverse的一款大型生存/探索/FPS/RPG类VR游戏。它将让你身临其境，进入异星的“死亡世界”——一个充满奇特动植物、未知危险以及各种惊喜的世界，体验史诗般的故事情节、充满个性的人物以及完整宏大的世界观。
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们是一群来自世界顶级AAA工作室的狂热游戏爱好者，团聚在一起是为了制作出一款有新意、有深度并能让人沉浸在VR世界中数百小时的游戏。
        </p>
        <div class="status">
            COMING SOON
        </div>
    </div>
	<div class="poster poster1 section">
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">游戏将包括的功能</div>
        
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>
                全程多人合作<br>
                装备合成<br>
                烹饪<br>
                原材料收集<br>
                生存元素（饥饱度、精神、氧气等）<br>
                大型开放世界<br>
                建筑建造<br>
                装备稀有度（常见、稀有、传奇）<br>
                数十万种武器与装备的变种<br>
				等等!</p>
		</div>
	</div>
	<div class="poster poster2 section">
		<!-- <img src="/img/poster2.png" alt="poster1" > -->
		<div class="shadow"></div>
        <div class="hidden-xs hidden-sm hidden-md height-100px"></div>
		<div class="title col-md-6 col-md-offset-6 col-sm-12">关于SeekinDawn</div>
		<div class="des col-md-6 col-md-offset-6 col-sm-12">
			<p>Seeking Dawn》完整版本上线时将实现的功能包括：资源收集、装备制作、食物烹饪、多人合作、生物进化系统、庞大而有深度的科技树、丰富有趣的AI、装备稀有度及模块组合、酷炫的特殊能力以及数个风格迥异的半开放世界异星环境！

                <br>
            </p>
		</div>
	</div>
@endsection

@section('script')
        var _video = document.getElementById('banner_video');
        _video.controls = false;
        _video.autoplay = true;
        _video.loop = true;
        _video.preload = true;
        _video.muned = true;

@endsection