<template>
    <div class="work">
        <nav-bar></nav-bar>
        <banner></banner>
        <div class="about container">
            <div class="col-lg-1">
                <img src="/images/work_about_1.png" alt="">
            </div>
            <div class="col-lg-10">
                <div class="col-lg-6">
                    <ul>
                        <li>
                            <p>·  公司环境、氛围</p>
                            <span> 一家充满神秘并且其乐无穷的跨国游戏公司正向你开启光明的大门。</span>
                        </li>
                        <li>
                            <p>· 企业文化</p>
                            <span> Multiverse以游戏为核心，研发各种以游戏性和目标的游戏。我们以打造最好的游戏为目标，并且持之以恒的行动着。</span>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-6">
                    <img src="/images/whfw.png" alt="" class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <img src="/images/env.png" alt="" class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li style="margin-top: 75px">
                            <p>· 优越的硬件设备</p>
                            <span>对于一个互联网公司，优越的硬件自然是不可缺少。对于不同的职位我们将提供不同级别的硬件，但是作为一家游戏爱好者聚集的公司，我们能够保证的是所有人都能流畅的去体验目前的热门作品。</span>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="history container">
            <p class="dev_history"><img src="/images/history.png" alt=""></p>
            <p class="awards"><img src="/images/awards.png" alt=""></p>
        </div>
        <ul class="awards_list container">
            <li class="col-lg-2 col-md-2 col-lg-offset-1 col-md-offset-1">
                <div class="pic"><img src="/images/unity.png" alt="unity"></div><p>Unity特邀演讲嘉宾</p></li>
            <li class="col-lg-2 col-md-2"><div class="pic"><img src="/images/intel.png" alt="intel"></div><p>Intel 全球唯一MR合作伙伴</p></li>
            <li class="col-lg-2 col-md-2"><div class="pic"><img src="/images/gdc.png" alt="gdc" style="margin-top: 15px"></div><p>GDC VRDC 特邀专家顾问</p></li>
            <li class="col-lg-2 col-md-2"><div class="pic"><img src="/images/tuoluo.png" alt="tuoluo"></div><p>第一届金陀螺奖最受期待VR游戏</p></li>
            <li class="col-lg-2 col-md-2"><div class="pic"><img src="/images/gad.png" alt="gad"></div><p>腾讯GAD&HTC VIVIE 最佳视觉游戏</p></li>
        </ul>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    import Banner from '../components/Banner'
    export default {
        mounted() {
            console.log('Work Pages mounted.')
        },
        components:{
            NavBar, FooterBar, Banner
        }
    }
</script>
