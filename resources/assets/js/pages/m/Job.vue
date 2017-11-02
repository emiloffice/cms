<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/m_job_banner.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <div class="job-page container">
            <div class="top">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="/images/m_job1.png" alt="">
                    <p>
                        一家充满神秘并且其乐无穷的跨国游戏公司正向您开启光明的大门<br/>
                        我们允许你可以自己做产品经理！<br/>
                        我们让你自主决定技术架构及工作方法！<br/>
                        我们听取你任何好的想法，从无限制！<br/>
                        我们让工作变成一件令人享受的事情！<br/>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="/images/m_job2.png" alt="">
                    <p>
                        吃不完的零食！（啊？）<br/>
                        喝不完的饮料！（什么？）<br/>
                        自由自在的工作环境！（真的吗？）<br/>
                        优厚的待遇！（Really？）<br/>
                        延长的假期！（哇喔？）<br/>
                        巨大的升迁空间而且还没有办公室政治！（WTF？）<br/>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="/images/m_job3.png" alt="">
                    <P>
                        如果您牛到以下程度：<br>
                        ·3年以上游戏相关经验；<br>
                        ·经历过完整的游戏研发项目；<br>
                        ·吃苦耐劳、乐于奉献、团队意识强。<br>
                        既然您对自己辣么有信心，那还等什么？<br>
                        这里就是您转变人生的地方！快到碗里来！！！！<br>
                        然鹅：    我们只招最优秀的人才!<br>
                        我需要您！！！I want you!!! （一？按钮呢？？？）<br>
                    </P>
                </div>
            </div>
            <div class="bottom">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="/images/m_job4.png" alt="">
                    <p>
                        我们需要您到碗里来：<br>
                        ·自主决定工作方法<br>
                        ·预留充足时间用于学习新技术<br>
                        ·加强团队成员间正能量沟通<br>
                        ·研发多款充满挑战却又乐趣无穷的新项目<br>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="/images/m_job5.png" alt="">
                    <p>
                        人生路上的老斯基说：骚年郎，不要错过好机会喔！<br>
                        如有意，请将您的个人资料发送至<br>
                        招聘邮箱：contact @multiverseinc.com<br>
                        电话：0755-86564169<br>

                        MULTIVERSE 欢迎您的加入！
                    </p>
                </div>
            </div>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/m/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        }
    }

</script>
