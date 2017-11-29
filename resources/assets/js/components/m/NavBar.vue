<template>
    <nav class="m-nav-bar" v-bind:class="{ active:isActive }">
        <div class="container">
            <a href="/"><img src="/images/m-logo.png" alt="Multiverse logo" class="logo"></a>
            <a href="#" class="nav_trigger"  v-on:click="navigation"><span class="nav_icon"></span></a>
        </div>
        <transition name="bounce" v-if="isActive">
            <ul class="menu container">
                <li v-for="(m,index) in $t('nav.menu')" v-on:click="navActive(index)" v-bind:class="{ active: index + 1 == navIndex}"><a :href="m.link">{{m.name}}</a></li>
                <li><a v-on:click="switchLang('en-US')" class="" v-if="this.$i18n.locale==='zh-CN'">EN</a>
                    <a v-on:click="switchLang('zh-CN')" class="" v-if="this.$i18n.locale==='en-US'">中文</a></li>
            </ul>
        </transition>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
            this.$i18n.locale = localStorage.getItem('language')
        },
        data(){
            return{
                isActive: false,
                lang: this.$i18n.locale,
                navIndex:this.$parent.navIndex,
            }
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            navActive(e){
                window.localStorage.setItem('navIndex', e+1)
            },
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
        }
    }
</script>
