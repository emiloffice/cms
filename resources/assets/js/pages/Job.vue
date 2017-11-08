<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img :src="$t('job_banner_src')" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <div class="job-page container">
            <div class="top">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" v-for="(list ,index) in $t('job_view')" v-if="index<3">
                    <img :src="list.img_src" alt="">
                    <p v-html="list.des">
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
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        },
        data(){
            return{
                navIndex: 5
            }
        }
    }

</script>
}
