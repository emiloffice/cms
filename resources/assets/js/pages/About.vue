<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/about_banner.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <div class="about container">
                <div class="col-lg-7">
                    <ul>
                        <li>
                            <p><img src="/images/intro.png" alt="intro"></p>
                            <div v-html="$t('about_view.intro')"></div>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-5">
                    <img src="/images/intro_img1.png" alt="" style="width: 100%;">
                </div>
                <div class="col-lg-5" style="height: 420px">
                    <img src="/images/intro_img2.png" alt="" style="width: 100%;">
                </div>
                <div class="col-lg-7" >
                    <ul>
                        <li style="margin-top: 75px">
                            <p><img src="/images/story.png" alt=""></p>
                            <span v-html="$t('about_view.story')"></span>
                        </li>
                    </ul>

                </div>

            </div>
        <div class="press">
            <p class="tc"><img src="/images/press.png" alt="" style="margin-bottom: 50px;"></p>
            <ul class="container">
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_upload.png" alt=""></div>
                    <p>'One of the most visually<br>
                        compelling experiences'</p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_2.png" alt=""></div>
                    <p>'One of the most<br>
                        anticipated games of the<br>
                        year'</p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc">
                    <div class="img"><img src="/images/press_oculus.png" alt=""></div>
                    <p>
                        'One of the most<br>
                        breathtaking experiences<br>
                        we have ever seen'<br>
                    </p>
                    <a href=""><img src="/images/more.png" alt="href"></a>
                </li>
            </ul>
        </div>
        <div class="partner">
            <p class="tc">
                <img src="/images/partner.png" alt="" style="margin-bottom: 50px;">
            </p>
            <ul class="container">
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc"><img src="/images/partners-vive.png" alt=""></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc"><img src="/images/partners-oculus.png" alt=""></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tc"><img src="/images/partners-steam.png" alt=""></li>
            </ul>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        created() {
        },
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        },
        data(){
            return{
                navIndex: 1
            }
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