<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>

        <div class="page container">
            <h2 class="text-center">{{ post.title}}</h2>
            <p class="text-center">{{ post.updated_at}}</p>
            <div  id="post-content" v-html="post.content"></div>
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
            this.post = eval('('+ this.posts +')')
        },
        components:{
            NavBar, FooterBar
        },
        props:[
            'posts'
        ],
        data(){
            return {
                post:''
            }
        }
    }

</script>
}
