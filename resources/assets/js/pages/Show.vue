<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="page container">
            <div class="left fl">

            </div>
            <ul class="right fl article_link_list">
                <li class="active"><i class="anchor"></i><span>最刺激的星际吃鸡</span></li>
                <li class=""><i class="anchor"></i><span>最刺激的星际吃鸡</span></li>
                <li class=""><i class="anchor"></i><span>最刺激的星际吃鸡</span></li>
                <li class=""><i class="anchor"></i><span>最刺激的星际吃鸡</span></li>
                <li class=""><i class="anchor"></i><span>最刺激的星际吃鸡</span></li>
            </ul>
        </div>
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
