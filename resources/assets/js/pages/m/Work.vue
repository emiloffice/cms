<template>
    <div class="m-work">
        <nav-bar></nav-bar>
        <div class="mobile-page">
            <div class="banner">
                <img src="/images/m_work_bg.png" alt="work banner">
            </div>
            <div class="container">
                <p class="des-title">·  公司环境、氛围</p>
                <p>一家充满神秘并且其乐无穷的跨国游戏公司正向你开启光</p>
                <p class="des-title">·  企业文化</p>
                <p>Multiverse以游戏为核心，研发各种以游戏性和目标的游戏。我们以打造最好的游戏为目标，并且持之以恒的行动着。</p>
                <img src="images/m_work_1.png" alt="" style="width: 100%;margin: 20px 0;">
                <p class="des-title">· 优越的硬件设备</p>
                <p>对于一个互联网公司，优越的硬件自然是不可缺少。对于不同的职位我们将提供不同级别的硬件，但是作为一家游戏爱好者聚集的公司，我们能够保证的是所有人都能流畅的去体验目前的热门作品。</p>
                <img src="images/m_work_2.png" alt="" style="width: 100%;margin: 20px 0;">
            </div>
            <div class="history">
                <img src="/images/m_history_title.png" alt="" style="width: 63%;padding-left: 5%">
            </div>
            <Steps></Steps>
            <img src="/images/m_awards_title.png" alt="" style="width: 90%;margin: 50px auto;display:block">
            <div class="awards container">
                <img src="/images/m_award.png" alt="title" style="width: 100%;">
            </div>


        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/FooterBar'
    import Banner from '../../components/Banner'
    import Steps from '../../components/Steps'
    export default {
        mounted() {
            console.log('Work Pages mounted.')
        },
        components:{
            NavBar, FooterBar, Banner, Steps
        }
    }
</script>
