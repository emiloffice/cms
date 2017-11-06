<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/game_banner.png" alt="" style="max-width: 1600px;width: 90%;">
            </div>
        </div>
        <ul class="game_list container">
            <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  v-for="list in $t('games')">
                <div class="left fl">
                    <img :src="list.cover" :alt="list.cover_alt">
                    <span class="play_btn" v-on="play_video()"></span>
                </div>
                <div class="right fl">
                    <p class="name"> {{list.name}}</p>
                    <p class="des" style="border: none;margin-top: 0;">
                        {{list.des}}
                    </p>
                    <a :href="list.link">{{$t('game_page.link_name')}}</a>
                </div>
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
        },
        components:{
            NavBar, FooterBar
        },
        methods:{
            play_video(){

            }
        }
    }

</script>
}
