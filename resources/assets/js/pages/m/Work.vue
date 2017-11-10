<template>
    <div class="m-work">
        <nav-bar></nav-bar>
        <div class="mobile-page">
            <div class="banner">
                <img src="/images/m_work_bg.png" alt="work banner">
            </div>
            <div class="container">
                <p class="des-title">·   {{$t('work_view.env_title')}}</p>
                <p>{{$t('work_view.env_des')}}</p>
                <p class="des-title">·  {{$t('work_view.culture_title')}}</p>
                <p> {{$t('work_view.culture_des')}}</p>
                <img src="images/m_work_1.png" alt="" style="width: 100%;margin: 20px 0;">
                <p class="des-title">· {{$t('work_view.hardware_title')}}</p>
                <p>{{$t('work_view.hardware_des')}}</p>
                <img src="images/m_work_2.png" alt="" style="width: 100%;margin: 20px 0;">
            </div>
            <div class="history">
                <img src="/images/m_history_title.png" alt="" style="width: 63%;padding-left: 5%">
                <Steps ></Steps>
            </div>

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
    import FooterBar from '../../components/m/FooterBar'
    import Banner from '../../components/Banner'
    import Steps from '../../components/Steps'
    export default {
        mounted() {
            console.log('Work Pages mounted.')
        },
        components:{
            NavBar, FooterBar, Banner, Steps
        },
        data(){
            return{
                navIndex: 3
            }
        },
    }
</script>
