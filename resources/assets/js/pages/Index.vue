<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div id="fullpage">
            <div class="section " id="section0">
                <img src="/images/index-banner.png" alt="">
            </div>
            <div class="section" id="section1">
                <img src="/images/released-games.png" class="title" alt="RELEASED GAMES" style="position: absolute;top: 10px;left: 10px;">
                <ul class="game-list">
                    <li>
                        <div class="thumb">
                            <img src="/images/seekingdawn_thumb.png" alt="seekingdawn">
                        </div>
                        <div class="play_btn" onclick="play_video()"></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="/images/DOTR.png" alt="seekingdawn">
                        </div>
                        <div class="play_btn" onclick="play_video()"></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="/images/yzcy.png" alt="seekingdawn">
                        </div>
                        <div class="play_btn" onclick="play_video()"></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="/images/tg.png" alt="seekingdawn">
                        </div>
                        <div class="play_btn" onclick="play_video()"></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <img src="/images/dream-flight.png" alt="seekingdawn">
                        </div>
                        <div class="play_btn" onclick="play_video()"></div>
                    </li>
                </ul>
                <div class="intro">

                </div>
            </div>
            <div class="section" id="about">
                <div class="left">
                <img src="/images/about-us.png" alt="ABOUT US" class="title">
                <div class="des">
                    <p class="title">我们的愿景</p>
                    <p>我们希望能够成为世界顶尖的游戏开发商，做出能够风靡世界的3A游<br/>
                        戏，为中国游戏的崛起做出努力。</p>
                    <p class="title">我们的价值观</p>
                    <p>我们的价值观是做好玩的游戏，至始至终以游戏性为目的去研发游戏<br/>
                        ，做顶尖的和精品的游戏。</p>
                </div>

                </div>
                <div class="right">
                    <img src="/images/monster.png" alt="monster">
                </div>
            </div>
            <div class="section" id="news">
                <ul class="news-list container">
                    <li>
                        <a href="http://mp.weixin.qq.com/s/To8yixNKIxgCHUXyf9cEGg" target="_blank">
                        <div class="thumb">
                            <img src="/images/new1-thumb.png" alt="">
                            <p class="news-title">最刺激的星际吃鸡</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://mp.weixin.qq.com/s/Lw1RwyTeaphVUSiXntVsYg" target="_blank">
                        <div class="thumb">
                            <img src="/images/new2-thumb.png" alt="">
                            <p class="news-title">新款GearVR要来了，你期待吗？</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://mp.weixin.qq.com/s/KMvlWJNm0uHCet4cqiynEA" target="_blank">
                        <div class="thumb">
                            <img src="/images/new3-thumb.png" alt="">
                            <p class="news-title">《寻找黎明》荣获GAD最佳视觉奖  超美画面抢先放送</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://mp.weixin.qq.com/s/srXc6XZkTQOUoRyi6mjYxg" target="_blank">
                        <div class="thumb">
                            <img src="/images/new4-thumb.png" alt="">
                            <p class="news-title">在Vision Summit上 Multiverse到底分享了什么经验？</p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://mp.weixin.qq.com/s/lyTZj5ySbWCq_nIQVDYzBA" target="_blank">
                        <div class="thumb">
                            <img src="/images/new5-thumb.png" alt="">
                            <p class="news-title">独家专访Multiverse范威洋</p>
                        </div>
                        </a>
                    </li>
                </ul>
                <footer-bar></footer-bar>
            </div>

        </div>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
            console.log(this.$msg)
        },
        components:{
            NavBar, FooterBar
        }
    }

</script>
<style>
    .section{
        background: url("/images/bg.jpg") no-repeat center;
    }
    .section p{
        color: #999999;
    }
    #section0 img{
        width: 100%;
    }
    #section1>img{

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