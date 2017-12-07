<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/game_banner.png" alt="" style="max-width: 1600px;width: 90%;height: 800px;object-fit: contain;">
            </div>
        </div>
        <ul class="game_list container">
            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12" v-for=" list in $t('games')">
                <div class="left fl">
                    <img :src="list.cover" :alt="list.cover_alt">
                    <div class="play_btn" @click="play_video(list.video)" style="position: absolute;top: 50%;left: 50%;margin-top: -32px;margin-left: -32px;" v-if="list.isPlay"></div>
                </div>
                <div class="right fl">
                    <p class="name"> {{list.name}}</p>
                    <p class="des">
                        {{list.des}}
                    </p>
                    <a :href="list.link" target="_blank" rel="nofollow"><i class="fa fa-external-link red" style="margin-right: 5px"></i>{{$t('game_page.link_name')}}</a>
                </div>
            </li>
        </ul>
        <videos  :videoSrc="videoSrc" v-if="videoIsShow"></videos>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    import Videos from '../components/Video'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar, Videos
        },
        data(){
            return {
                videoIsShow: false,
                videoSrc:'',
                navIndex:2
            }
        },
        methods:{
            play_video(e){
                e==""|e==null?this.videoIsShow = false:this.videoIsShow=true,this.videoSrc = e
            }
        }
    }

</script>
}
