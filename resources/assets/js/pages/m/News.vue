<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <ul class="news container">
            <img src="/images/m_news_title.png" alt="NEWS">
            <li v-for="n in $t('news')">
                <a :href="n.link" target="_blank">
                    <div class="thumb"><img :src="n.cover" alt=""></div>
                    <p class="des">
                        <span class="news-title">{{n.title}}</span>
                        <span class="create-at">{{n.created_at}}</span>
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
        },
        components:{
            NavBar, FooterBar
        },
        data(){
            return{
                navIndex: 4
            }
        }
    }

</script>
}
