<template>
    <div class="work">
        <nav-bar></nav-bar>
        <div class="content" style="height: 800px"></div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/FooterBar'
    import Banner from '../../components/Banner'
    export default {
        mounted() {
            console.log('Work Pages mounted.')
        },
        components:{
            NavBar, FooterBar, Banner
        }
    }
</script>
