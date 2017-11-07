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
            <li v-for="(list, index) in $t('news')" v-if="index<5">
                <a :href="list.link" target="_blank">
                    <div class="thumb"><img :src="list.cover" alt=""></div>
                    <p class="des">
                        <span class="news-title">{{list.title}} </span>
                        <span class="create-at">{{list.created_at}}</span>
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
