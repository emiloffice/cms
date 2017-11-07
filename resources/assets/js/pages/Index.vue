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
                    <li v-for="list in $t('games')">
                        <div class="thumb">
                            <img :src="list.cover" :alt="list.cover_alt" class="cover">

                            <div class="play_btn" onclick="play_video()" style="position: absolute;top: 50%;left: 50%;margin-top: -32px;margin-left: -32px;"></div>
                        </div>
                        <a :href="list.link" class="more"><img src="/images/more.png" alt=""></a>
                        <div class="des">{{list.des}}</div>
                    </li>
                </ul>
                <div class="intro">

                </div>
            </div>
            <div class="section" id="about" style="">
                <div class="left">
                <img src="/images/about-us.png" alt="ABOUT US" class="title">
                <div class="des" v-html="$t('index_view.about_des')">

                </div>

                </div>
            </div>
            <div class="section" id="news">
                <ul class="news-list container">
                    <li v-for="(list, index) in $t('news')" v-if="index<3">
                        <a :href="list.link" target="_blank">
                        <div class="thumb">
                            <img :src="list.cover" alt="">
                            <p class="news-title">{{list.title}}</p>
                        </div>
                        </a>
                    </li>
                    <!--<li>
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
                    </li>-->
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
        created() {
            console.log('lang:'+ this.$i18n.locale)
            /*this.locale = localStorage.getItem('language') // 从 localStorage 中获取语言状态

            this.$i18n.locale = localStorage.getItem('language')*/
        },
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
        display: block;
        width: 85%;
        margin: 0 auto;
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