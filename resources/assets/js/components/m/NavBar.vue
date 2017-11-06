<template>
    <nav class="m-nav-bar" v-bind:class="{ active:isActive }">
        <div class="container">
            <a href="/"><img src="/images/m-logo.png" alt="Multiverse logo" class="logo"></a>
            <a href="#" class="nav_trigger"  v-on:click="navigation"><span class="nav_icon"></span></a>
        </div>
        <transition name="bounce" v-if="isActive">
            <ul class="menu container">
                <li v-for="m in $t('nav.menu')"><a :href="m.link">{{m.name}}</a></li>
                <li><a v-on:click="switchLang('en-US')" class="" v-if="lang==='zh-CN'">EN</a>
                    <a v-on:click="switchLang('zh-CN')" class="" v-if="lang==='en-US'">中文</a></li>
            </ul>
        </transition>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
        },
        data(){
            return{
                isActive: false,
                lang: this.$i18n.locale
            }
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            switchLang(e){
                let lang = this.$parent.locale
                this.isActive = false
                if (e ==='en-US'){
                    this.$parent.locale = this.$i18n.locale = 'en-US'
                    this.lang = 'en-US'
                    localStorage.setItem('language', 'en-US')
                }
                if(e === 'zh-CN'){
                    this.$parent.locale = this.$i18n.locale = 'zh-CN'
                    localStorage.setItem('language', 'zh-CN')
                    this.lang = 'zh-CN'
                }
            }
        }
    }
</script>
