<template>
    <div class="container-fluid about-page">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/m_about_banner_bg.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <div class="about container">
            <div class="col-lg-7">
                <ul>
                    <li>
                        <p><img src="/images/intro.png" alt="intro"></p>
                        <span>深圳市摩登世纪科技有限公司是一家专业VR内容游戏开发和发行工作室。我们是一家世界级的虚拟现实内容研发企业。团队成员毕业于斯坦福大学、卡内基梅隆、Darden商学院等世界知名学府，并拥有Wevr、迪士尼、Riot（英雄联盟）、CJ E&M、银汉（时空枪战）、SGN等顶尖VR及游戏企业的经历。团队的上一款产品《Reveries: Dream Flight》是目前全球评分最高的国产VR游戏。开发中的大型新游戏项目《Seeking Dawn》获得腾讯VR开发者大赛最佳视觉奖。</span>
                        <p>· 我们的愿景</p>
                        <span> 我们希望能够成为世界顶尖的游戏开发商，做出能够风靡世界的3A游戏，为中国游戏的崛起做出努力。</span>
                        <p>·  公司环境、氛围</p>
                        <span> 一家充满神秘并且其乐无穷的跨国游戏公司正向你开启光明的大门。</span>
                        <p>· 我们的价值观</p>
                        <span>我们的价值观是做好玩的游戏，至始至终以游戏性为目的去研发游戏，做顶尖的和精品的游戏。</span>
                    </li>
                </ul>

            </div>
            <div class="col-lg-5">
                <img src="/images/intro_img1.png" alt="" style="width: 100%;">
            </div>

            <div class="col-lg-7" >
                <ul>
                    <li style="margin-top: 75px">
                        <p><img src="/images/story.png" alt=""></p>
                        <span>Multiverse立足于深圳，将目光看向世界，成立之初的产品《Dream Flight》获得了国产移动VR游戏在Gear VR平台上的最好评分。第二款研发的大型VR游戏《Seeking Dawn》在开发中期就获得了腾讯GAD开发大赛最佳视觉奖。在开发过程中接受UNITY公司邀请，前往VISION大会进行演讲。
E3期间，《Seeking Dawn》成为了英特尔战展前发布会上唯一MR合作伙伴，通过MR技术向世界玩家展示了我们的游戏。E3展上《Seeking Dawn》接受了数十名记者的采访，也是E3展上最受玩家欢迎的VR游戏商展区之一。
而在未来，我们将会沿着游戏的开发道路，持续不断的进行探索！</span>
                    </li>
                </ul>

            </div>
            <div class="col-lg-5" style="height: auto">
                <img src="/images/intro_img2.png" alt="" style="width: 100%;">
            </div>

        </div>
        <div class="press">
            <img src="/images/m_press_title.png" alt="" style="margin:39px auto;display:block">
            <ul class="container">
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_upload.png" alt=""></div>
                    <p>“One of the most visually<br>
                        compelling experiences”</p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_2.png" alt=""></div>
                    <p>“One of the most<br>
                        anticipated games of the<br>
                        year”</p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_oculus.png" alt=""></div>
                    <p>
                        “One of the most<br>
                        breathtaking experiences<br>
                        we have ever seen”<br>
                    </p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
            </ul>
        </div>
        <div class="partner">
            <p class="tc">
                <img src="/images/partner.png" alt="">
            </p>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        }
    }

</script>
<style scoped="" lang="scss">
    .about{
        font-size: 18px;
        line-height: 1.5em;
        p{
            font-size: 20px;
            font-weight: bold;
        }
    }
    .press{
        margin: 100px 0;
        .img{
            height: 80px;
            text-align: center;
            width: 250px;
            margin: 0 auto;
        }
        ul{
            p{
                height: 95px;
            }
            a{
                margin: 10px 0;
                display: inline-block;
            }
        }
    }

</style>