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
            <P class="title">
                DEVELOPMENT
            </P>
            <P class="title">
                HISTORY
            </P>
        </div>
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
