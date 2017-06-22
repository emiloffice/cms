@extends('layouts.CnMaster')
@section('content')
    <div id="banner" class="container-fluid" style="padding: 0px!important;">
        <video  preload="auto" autoplay  width="100%" height="auto" id="banner_video" poster="/img/SeekingDawn_Banner.jpg"  muted="true">
            <source src="https://s3-us-west-2.amazonaws.com/multiverseinc/SeekingDawnAlphaTrailerV1.mp4">
        </video>
        <div id="banner_shadow"  class="hidden-sm hidden-xs"></div>
        <div id="banner_des" class="hidden-sm hidden-xs">
            <img id="video_title" src="/img/SeekingDawn_logo.png">
            <p id="video_despriction">
                Seeking Dawn是由Multiverse制作的大规模的生存探索类VR游戏. 带你进入身临其境的外星人“死亡世界”，里面充满了有趣的植物和动物，未知的危险和美妙的食物在等着你来体验！
            </p>
            <a id="status" href="/seekingdawn">
                获取更多
            </a>
        </div>
    </div>
    <div class="hidden-lg hidden-md sm-despriction">
        <p>
            &nbsp;Seeking Dawn是由Multiverse制作的大规模的生存探索类VR游戏. 带你进入身临其境的外星人“死亡世界”，里面充满了有趣的植物和动物，未知的危险和美妙的食物在等着你来体验！
        </p>
        <a href="/seekingdawn" class="text-align-center" style="display: block;text-align: center;">
            获取更多
        </a>
    </div>
    <div class="creators">
        <div class="content col-sm-12 col-md-6 col-md-offset-6">
            <div class="name">Multiverse</div>
            <div class="title">游戏厂商</div>
            <div class="des">
                我们都是铁杆玩家，我们想要一个深度的、需要思考的，并包含数百小时的上瘾的VR游戏。Seeking Dawn就是这样的游戏，它将是最大规模的VR游戏。一切正在精心制作完美中，敬请期待。
            </div>
            <a class="contact" href="http://www.multiverseinc.com/contact">联系我们</a>
        </div>

    </div>
    <!--dev blog-->
    <div class="dev-blog container-fluid hidden">
        <div class="container">
            <div class="title-part">
                <p class="subtitle">Blog</p>
                <p class="title">THE DEVELOPERS BLOG</p>
                <p class="des">We will continue to update the blog, welcome enthusiasts and we interact</p>
            </div>
            <div class="blog-area container">
                @foreach($posts as $post)
                    <div class="blog">
                        <div class="thumb"><img src="/img/thumb2.jpg" alt=""></div>
                        <p class="title">{{ $post->title }}</p>
                        <p class="create_at">{{ $post->created_at }}</p>
                        <p class="des">{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="published_game text-algin">
        <div class="title font-size-32 text-center">
            游戏体验专区
        </div>
        <div class="subtitle text-center">这些游戏值得您体验</div>
        <div class="left col-md-6 col-sm-12">
            <div class="game_name font-size-32">Reveries: Dream Flight</div>
            <p>Dream Flight是一款音乐跑酷游戏，主打享受梦幻的虚拟世界。驾驶着小姑娘的纸飞机，穿越充满魔力的梦幻世界，寻找失散的同伴。不需要手柄，也没有血腥的厮杀，Dream Flight让你彻底陶醉在充满艺术感的视听盛宴中。游戏中每一首背景音乐都由西方独立音乐制作人倾情打造。</p>
            <div class="download fl">
                <a class="btn" href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" target="_blank">
                    <i class="fa fa-download"></i>
                    DOWNLOAD</a>

            </div>
        </div>
        <div class="right col-md-6 hidden-sm hidden-xs">
            <img src="/img/game1.png" alt="游戏图片">
        </div>
    </div>
    <div class="subscribe">
        <div class="content">
            <div class="title text-center">想要加入VR创新领域？</div>
            <form action="{{ url('subscribe') }}" class="form_content" method="post">
                <input type="email" class="email_input" placeholder="你的邮箱" name="email" id="email">
                <button class="subscribe_btn" type="button" onclick="form_submit()">发送</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
@endsection