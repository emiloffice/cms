<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/game_banner.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <ul class="game_list container">
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left fl">
                    <img src="/images/thumb1.png" alt="">
                    <span class="play_btn" v-on="play_video()"></span>
                </div>
                <div class="right fl">
                    <p class="name"> 《寻求黎明》</p>
                    <p class="des">
                        Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，带你进入身临其境的外星人“死亡世界”。如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。
                    </p>
                    <a href="">官方网站</a>
                </div>
            </li>
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left fl">
                    <img src="/images/thumb2.png" alt="">
                </div>
                <div class="right fl">
                    <p class="name"> 《特工22号：越狱》</p>
                    <p class="des">《圣域纷争》是由深圳火花幻境研发，Multiverse发行的一款塔防类VR游戏。玩家需要在游戏中扮演一名孤胆英雄，利用好陷阱和道具面对敌人，通过陷阱阻止他们前行守护最后的圣域。</p>
                    <a href="">官方网站</a>
                </div>
            </li>
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left fl">
                    <img src="/images/thumb3.png" alt="">
                </div>
                <div class="right fl">
                    <p class="name"> 《圣域纷争》</p>
                    <p class="des">
                        《圣域纷争》是由深圳火花幻境研发，Multiverse发行的一款塔防类VR游戏。玩家需要在游戏中扮演一名孤胆英雄，利用好陷阱和道具面对敌人，通过陷阱阻止他们前行守护最后的圣域。
                    </p>
                    <a href="">官方网站</a>
                </div>
            </li>
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left fl">
                    <img src="/images/thumb4.png" alt="">
                </div>
                <div class="right fl">
                    <p class="name"> 《梦幻风之旅》</p>
                    <p class="des">《梦幻风之旅》Dream Flight是一款让你尽情享受充满梦幻虚拟世界的美丽游戏。驾驶着纸飞机的小姑娘，穿越充满魔力的梦幻世界，寻找失散的同伴。不需要手柄，也没有血腥的厮杀，Dream Flight让你彻底陶醉在充满艺术感的视听盛宴中</p>
                    <a href="">官方网站</a>
                </div>
            </li>
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left fl">
                    <img src="/images/thumb5.png" alt="">
                </div>
                <div class="right fl">
                    <p class="name"> 《银河穿梭VR》</p>
                    <p class="des">《银河穿梭VR》是一款VR跑酷类游戏，玩家仿佛星际穿梭一般，穿越了时空的界限，在充满次世代的音乐背景中极速飞行!富含科幻感的时空隧道内，你需要高度集中注意力，紧盯着路径上的红点，随时躲避前方的障碍物。</p>
                    <a href="">官方网站</a>
                </div>
            </li>
        </ul>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        },
        methods:{
            play_video(){

            }
        }
    }

</script>
}
