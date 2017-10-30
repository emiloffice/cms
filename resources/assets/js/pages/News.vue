<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <ul class="news container">
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
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
        },
        components:{
            NavBar, FooterBar
        }
    }

</script>
}
