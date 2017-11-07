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
                            <p>·  {{$t('work_view.env_title')}}</p>
                            <span> {{$t('work_view.env_des')}}</span>
                        </li>
                        <li>
                            <p>· {{$t('work_view.culture_title')}}</p>
                            <span> {{$t('work_view.culture_des')}}</span>
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
                            <p>· {{$t('work_view.hardware_title')}}</p>
                            <span>{{$t('work_view.hardware_des')}}</span>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="history container" :style="'background-image:url(' + $t('work_view.history_img') + ')'">
            <p class="dev_history"><img src="/images/history.png" alt=""></p>
            <p class="awards"><img src="/images/awards.png" alt=""></p>
        </div>
        <ul class="awards_list container">
            <li class="" v-for="list in $t('awards')"><div class="pic" ><img :src="list.cover" alt="unity"></div><p>{{list.name}}</p></li>
            <!--<li class=""><div class="pic"><img src="" alt="intel"></div><p>Intel 全球唯一MR合作伙伴</p></li>
            <li class=""><div class="pic"><img src="" alt="gdc" style="margin-top: 15px"></div><p>GDC VRDC 特邀专家顾问</p></li>
            <li class=""><div class="pic"><img src="" alt="tuoluo"></div><p>第一届金陀螺奖最受期待VR游戏</p></li>
            <li class=""><div class="pic"><img src="" alt="gad"></div><p>腾讯GAD&HTC VIVIE 最佳视觉游戏</p></li>-->
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
