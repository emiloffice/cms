<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner">
            <img src="/images/m_index_banner.png" alt="" style="width: 100%">
        </div>
        <p class="title"></p>
        <agile class="game_list container index" :dots="false" :arrows="false">
            <div class="slide" v-for="list in $t('games')">
                <img :src="list.cover" :alt="list.cover_alt" style="" class="cover">
                <p class="des">{{list.des}}</p>
                <a :href="list.link" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
        </agile>
        <div class="about index">
            <img src="/images/m_about_us.png" alt="ABOUT US" style="width: 100%">
            <div class="des container" v-html="$t('index_view.about_des')">
            </div>
        </div>
        <ul class="news container" style="padding-top: 0;">
            <li>
                <a href="http://mp.weixin.qq.com/s/To8yixNKIxgCHUXyf9cEGg" target="_blank">
                    <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                    <p class="des">
                        <span class="news-title">最刺激的星际吃鸡 </span>
                        <span class="create-at">2017.08.31</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="http://mp.weixin.qq.com/s/srXc6XZkTQOUoRyi6mjYxg" target="_blank">
                    <div class="thumb"><img src="/images/new2.png" alt=""></div>
                    <p class="des">
                        <span class="news-title">在Vision Summit上 Multiverse到底分享了什么经验？</span>
                        <span class="create-at">2017.06.05</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="http://mp.weixin.qq.com/s/Lw1RwyTeaphVUSiXntVsYg" target="_blank">
                    <div class="thumb"><img src="/images/new3.png" alt=""></div>
                    <p class="des">
                        <span class="news-title">新款GearVR要来了，你期待吗？</span>
                        <span class="create-at">2017.08.31</span>
                    </p>
                </a>
            </li>
            <li>
                <a href="https://mp.weixin.qq.com/s/KMvlWJNm0uHCet4cqiynEA" target="_blank">
                    <div class="thumb"><img src="/images/new4.png" alt=""></div>
                    <p class="des">
                        <span class="news-title">《寻找黎明》荣获GAD最佳视觉奖  超美画面抢先放送</span>
                        <span class="create-at">2017.08.31</span>
                    </p>
                </a>
            </li>
        </ul>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/m/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
            console.log(this.$msg)
        },
        components:{
            NavBar, FooterBar
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            left: function (){
                alert('left')
            },
            right: function () {
                alert('right')

            }
        },
    }

</script>
