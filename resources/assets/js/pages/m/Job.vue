<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/m_job_banner.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
                <img src="/images/m_join_title.png" alt="JOIN MULTIVERSE" style="display: block;width: 90%;margin: 0 auto">
            <div  class="container">
                <p>如果您，是一位明星级别的
                    unity3d开发工程师、游戏原画设计师、游戏策划师、游戏市场推广策划师。
                    停下您的脚步别走开！盯住您的目光别移开！暴风雨前的宁静</p>
                <a href="https://www.indeed.com/cmp/Multiverse-Entertainment" class="red" target="_blank"><i class="fa fa-external-link"></i>indeed</a>
            </div>
        </div>
        <div class="job-page container">
            <div class="top">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" v-for="(list ,index) in $t('job_view')" v-if="index<3">
                    <img :src="list.img_src" alt="">
                    <p v-html="list.des">
                        一家充满神秘并且其乐无穷的跨国游戏公司正向您开启光明的大门<br/>
                        我们允许你可以自己做产品经理！<br/>
                        我们让你自主决定技术架构及工作方法！<br/>
                        我们听取你任何好的想法，从无限制！<br/>
                        我们让工作变成一件令人享受的事情！<br/>
                    </p>
                </div>
            </div>
            <div class="bottom">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  v-for="(list ,index) in $t('job_view')" v-if="index>2">
                    <img :src="list.img_src" alt="">
                    <p v-html="list.des">
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
