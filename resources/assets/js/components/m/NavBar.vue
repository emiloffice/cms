<template>
    <nav class="m-nav-bar" v-bind:class="{ active:isActive }">
        <div class="container">
            <a href="/"><img src="/images/m-logo.png" alt="Multiverse logo" class="logo"></a>
            <a href="#" class="nav_trigger"  v-on:click="navigation"><span class="nav_icon"></span></a>
        </div>
        <transition name="bounce" v-if="isActive">
            <ul class="menu container">
                <li><a href="about">关于我们</a></li>
                <li><a href="game">游戏专区</a></li>
                <li><a href="work">我们的事业</a></li>
                <li><a href="news">新闻</a></li>
                <li><a href="jobs">招聘</a></li>
                <li><a href="contact">联系我们</a></li>
            </ul>
        </transition>
        <!---->
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
        },
        data(){
            return{
                isActive: false
            }
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            }
        }
    }
</script>
