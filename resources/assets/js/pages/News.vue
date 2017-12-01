<template>
    <div class="container-fluid" >
        <nav-bar></nav-bar>
        <div class="container"><img src="/images/new_title.png" alt="" style="margin-top: 110px"></div>
        <ul class="news container" v-if="this.$i18n.locale==='en-US'" >
            <li  v-for="n in $t('news')" >
                <a :href="n.link" target="_blank">
                    <div class="thumb"><img :src="n.cover" alt=""></div>
                    <p class="des">
                        <span class="news-title">{{n.title}}</span>
                        <span class="create-at">{{n.created_at}}</span>
                    </p>
                </a>
            </li>

        </ul>
        <ul class="news container" v-if="this.$i18n.locale==='zh-CN'" >
            <li  v-for="n in items" >
                <a :href="/posts/+n.id" target="_blank">
                    <div class="thumb"><img :src="n.thumb" alt="" v-if="n.thumb!==''"><img src="https://cdn.multiverseinc.com/img/post_cover.jpg" alt="" v-if="n.thumb==''"></div>
                    <p class="des">
                        <span class="news-title">{{n.title}}</span>
                        <span class="create-at">{{n.created_at}}</span>
                    </p>
                </a>
            </li>
<!--                <a :href="n.link" target="_blank">
                    <div class="thumb"><img :src="n.cover" alt=""></div>
                    <p class="des">
                        <span class="news-title">{{n.title}}</span>
                        <span class="create-at">{{n.created_at}}</span>
                    </p>
                </a>-->

        </ul>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
            console.log(this.posts)
            console.log(this.items)
        },
        components:{
            NavBar, FooterBar
        },
        props:[
            'posts'
        ],
        data(){
            return{
                navIndex: 4,
                items: eval('('+this.posts+')')
            }
        }
    }

</script>
}
