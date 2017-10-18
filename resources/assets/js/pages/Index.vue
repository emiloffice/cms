<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../components/NavBar'
    import FooterBar from '../components/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        }
    }

</script>
