<template>
    <nav class="nav-bar">
        <div class="container">
            <a href="/" class="logo"><img src="/images/logo.png" alt="Multiverse logo"></a>

            <ul class="menu" >
                <li v-for="(m ,index) in $t('nav.menu')" v-on:click="navActive(index)" v-bind:class="{ active: index + 1 == navIndex}"><a :href="m.link">{{m.name}}</a></li>
                <li><a v-on:click="switchLang('en-US')" class="" v-if="this.$i18n.locale==='zh-CN'">EN</a>
                    <a v-on:click="switchLang('zh-CN')" class="" v-if="this.$i18n.locale==='en-US'">中文</a></li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
            console.log('language:'+this.$i18n.locale)
            console.log('navIndex:'+this.navIndex)
            this.$i18n.locale = localStorage.getItem('language')
        },
        methods:{
            switchLang(e){
                let lang = this.$parent.locale
                if (e ==='en-US'){
                    this.$parent.locale = this.$i18n.locale =
                    this.$i18n.locale =  'en-US'
                    localStorage.setItem('language', 'en-US')
                }
                if(e === 'zh-CN'){
                    this.$parent.locale = 'zh-CN'
                    this.$i18n.locale = 'zh-CN'
                    localStorage.setItem('language', 'zh-CN')
                }
            },
            navActive(e){
                window.localStorage.setItem('navIndex', e+1)
            }
        },
        data(){
            return{
                navIndex:this.$parent.navIndex,

            }
        },
        computed:{
            classObject(e){

            }
        }
    }
</script>
